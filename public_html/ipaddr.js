logData 0

// bring up the login screen
navigate    https://mail.yahoo.com/

logData 1

// log in
setValue    name=login    loginid
setValue    name=passwd   password
submitForm name=login_form