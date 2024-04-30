

from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from bs4 import BeautifulSoup
import time
import os
import mysql.connector

from config import DB_CONFIG  # Importing database configuration



# Function to fetch company name from MySQL company_info table

def fetch_company_name():
    conn = mysql.connector.connect(**DB_CONFIG)
    cursor = conn.cursor()
    cursor.execute("SELECT company_name FROM company_info")
    company_name = cursor.fetchone()[0]  # Fetch the first row and first column (assuming company_name is the first column)
    conn.close()
    return company_name

# Fetch the company name from MySQL
company_name = fetch_company_name()



# Fetch the company name from MySQL
company_name = fetch_company_name()



# Specify the absolute path to chromedriver.exe
chromedriver_path = r"C:\Program Files (x86)\chromedrive\chromedriver.exe"

# Create a Chrome webdriver
chrome_service = Service(executable_path=chromedriver_path)
driver = webdriver.Chrome(service=chrome_service)

#save it in this directory
output_folder_parent = r"C:\Users\Rettis\OneDrive - 株式会社レゾナック\Customer Approval Repository"  

# Initialize a variable to store all extracted text
all_extracted_text = ""

# List of keywords
keywords = [
    'unethical',
    'unlawful',
    'criminal',
    'civil judgment',
    'penalty',
    'lawsuit',
    'antitrust',
    'corruption',
    'money laundering',
    'terrorist financing',
    'breach of contract',
    'human rights',
    'material litigation imposed',
    'settled',
    'alleged'
]

# Function to search for keywords and extract text from links
def search_and_extract(keyword):
    global all_extracted_text

    # Open a new tab for each keyword
    driver.execute_script("window.open('about:blank', '_blank');")
    driver.switch_to.window(driver.window_handles[-1])

    # Open Google News in the new tab
    driver.get("https://news.google.com/")
    time.sleep(5)

    # Find the search box and enter the keyword and company name
    search_box = driver.find_element(By.CSS_SELECTOR, "input[type='text'][aria-label='Search for topics, locations & sources']")
    search_box.clear()
    search_box.send_keys(f"{company_name} {keyword}")
    search_box.send_keys(Keys.RETURN)

    # Wait for a moment to let the results load
    time.sleep(5)

    # Extract text from links with jsaction="click:kkIcoc;"
    extracted_text = extract_text_from_links(keyword)

    # Append the extracted text to the global variable
    all_extracted_text += extracted_text

    # Take a screenshot and save it
    save_screenshot(keyword)

# Function to extract text from links based on jsaction attribute
def extract_text_from_links(keyword):
    try:
        time.sleep(5)
        # Wait for the links to be present on the page
        WebDriverWait(driver, 10).until(EC.presence_of_all_elements_located((By.XPATH, "//a[@jsaction='click:kkIcoc;']")))

        # Find all the links with jsaction="click:kkIcoc;"
        links = driver.find_elements(By.XPATH, "//a[@jsaction='click:kkIcoc;']")
        
        # If there are fewer than 41 links, print a message
        if len(links) <= 41:
            print("Not enough relevant results found.")
            return ""

        # Extract and print the text from the relevant links (after the first 41, up to a maximum of 10)
        header = f"{company_name} {keyword}".upper()
        result_text = f"\n{header}:\n"
        
        # Use Beautiful Soup to parse the page source
        soup = BeautifulSoup(driver.page_source, 'html.parser')

        # Extract text from the parsed soup (customize as needed)
        relevant_count = 0
        for link in soup.find_all('a', {'jsaction': 'click:kkIcoc;'}):
            extracted_text = link.get_text(strip=True)
            
            # Skip the first 41 results
            if relevant_count < 41:
                relevant_count += 1
                continue
            
            # Print a maximum of 10 relevant results with keywords and company name highlighted
            if relevant_count < 51:  # 41 + 10
                highlighted_text = highlight_keywords(extracted_text, keyword)
                result_text += highlighted_text + "\n"
                relevant_count += 1

        print(result_text)  # Print the result to the terminal
        return result_text

    except Exception as e:
        print(f"Error extracting text: {e}")
        return ""

# Function to highlight background of keywords and company name with a lighter yellow background
def highlight_keywords(text, keyword):
    highlighted_text = text
    for kw in keyword.split():
        highlighted_text = highlighted_text.replace(kw, f"\033[48;5;228m{kw}\033[0m")  # \033[48;5;228m sets a lighter yellow background
    highlighted_text = highlighted_text.replace(company_name, f"\033[48;5;228m{company_name}\033[0m")  # Highlight company name
    return highlighted_text

# Function to save a screenshot
def save_screenshot(keyword):
    # Create the "Screenshots" folder if it doesn't exist
    screenshot_folder = os.path.join(output_folder_parent, company_name, "Screenshots")
    os.makedirs(screenshot_folder, exist_ok=True)

    # Capture the screenshot and save it
    screenshot_filename = os.path.join(screenshot_folder, f"{company_name}_{keyword}.png")
    driver.save_screenshot(screenshot_filename)

# Iterate through the keywords and perform searches
for keyword in keywords:
    search_and_extract(keyword)

# Save all extracted text to a single .txt file
output_folder_company = os.path.join(output_folder_parent, company_name)
os.makedirs(output_folder_company, exist_ok=True)
txt_filename = os.path.join(output_folder_company, f"{company_name}_Keywords_Search.txt")
with open(txt_filename, "w", encoding="utf-8") as txt_file:
    txt_file.write(all_extracted_text)
