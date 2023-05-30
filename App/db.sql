CREATE TABLE User (
  user_id INT PRIMARY KEY,
  username VARCHAR(255),
  password VARCHAR(255),
  isAdmin BOOLEAN
);

CREATE TABLE Post (
  post_id INT PRIMARY KEY,
  user_id INT,
  title VARCHAR(255),
  content TEXT,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (user_id) REFERENCES User(user_id)
);

CREATE TABLE Comment (
  comment_id INT PRIMARY KEY,
  user_id INT,
  post_id INT,
  content TEXT,
  created_at DATETIME,
  updated_at DATETIME,
  FOREIGN KEY (user_id) REFERENCES User(user_id),
  FOREIGN KEY (post_id) REFERENCES Post(post_id)
);

CREATE TABLE Tag (
  tag_id INT PRIMARY KEY,
  name VARCHAR(255)
);

CREATE TABLE Post_Tag (
  post_id INT,
  tag_id INT,
  FOREIGN KEY (post_id) REFERENCES Post(post_id),
  FOREIGN KEY (tag_id) REFERENCES Tag(tag_id)
);
