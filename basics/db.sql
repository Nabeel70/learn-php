INSERT INTO users (username, pwd, email) VALUES 
('Muhammad Nabeel Amin', 'admmin', 'admin@gmail.com');
INSERT INTO users (username, pwd, email) VALUES 
('Aqeel', 'admin', 'admin123@gmail.com');
UPDATE users SET username = 'Muhammad Aqeel', email = 'admin456@gmail.com WHERE id = 2;
DELETE from users WHERE id = 2;
INSERT INTO comments (username, comment_text, user_id) VALUES 
('Muhammad Nabeel Amin', 'Hi, This is a Test Comment', 1);
SELECT username, email FROM users WHERE id = 1;
SELECT username, comment_text FROM comments WHERE user_id = 1;
SELECT * FROM comments WHERE user_id = 1;
SELECT * FROM users INNER JOIN comments ON users.id = comments.user_id;
SELECT * FROM users LEFT JOIN comments ON users.id = comments.user_id;
SELECT * FROM users RIGHT JOIN comments ON users.id = comments.user_id;