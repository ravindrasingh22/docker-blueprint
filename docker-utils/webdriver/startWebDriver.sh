#!/bin/bash
LOG_FILE="/var/log/phantom-webdriver.log"
phantomjs --webdriver=4444 | tee -a "$LOG_FILE"
