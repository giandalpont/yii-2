create database rest_apis;

create table noticias (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	titulo VARCHAR(130) NOT NULL,
	cabeca text NOT NULL,
  corpo text,
	statu tinyint(1),
	create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);