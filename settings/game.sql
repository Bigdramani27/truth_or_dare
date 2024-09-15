drop database if exists game;
create database game;
use game;

create table users(
user_id int not null auto_increment,
username varchar(50) not null,
email varchar(60) unique not null,
password varchar(500) not null,
sick_fuck_point int(255),
simple_point int(255),
crazy_point int (255),
horny_point int(255),
user_role int (25) not null,
primary key(user_id)
);

create table difficulty(
difficulty_id int not null auto_increment,
task text not null,
truth_dare varchar (30) not null,
type varchar(20),
point int(10) not null,
primary key(difficulty_id)
);

create table user_game(
 game_start_id int not null auto_increment,
 difficulty_id int not null unique,
 user_id int not null,
 completed varchar(11) not null,
 primary key(game_start_id),
  foreign key (difficulty_id) references difficulty (difficulty_id),
 foreign key (user_id) references users(user_id)
)

