--DDL:

CREATE TABLE users(userNum INT PRIMARY KEY AUTO INCREMENT, Fname TEXT(30), Lname TEXT(30),UserID VARCHAR, balance BIGINT, Email VARCHAR, pwd TEXT);

--DMLs:

INSERT INTO users(userNum,Fname,Lname,UserID,Email,pwd) VALUES(NULL,'$FnameAvailable','$LnameAvailable','$UsernameAvailable','$EmailAvailable','$hashedPassword');