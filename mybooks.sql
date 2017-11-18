-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 08:32 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybooks`
--

--
-- Dumping data for table `allbooks`
--

INSERT INTO `allbooks` (`bookid`, `booktitle`, `bookauthor`, `bookreserved`) VALUES
(1, 'Harry Potter', 'JK Rowling', 1),
(2, 'Pride and prejudice', 'Jane Austen', 1),
(3, 'Ulysses', 'James Joyce', 1),
(5, 'To kill a mockingbird', 'Harper Lee', 0),
(6, 'The call of the wild', 'Jack London', 0),
(7, 'Frankenstein', 'Mary Shelley', 0),
(8, 'Robinson Crusoe', 'Daniel Defoe', 0),
(9, 'The old man and the sea', 'Ernest Hemingway', 1),
(10, 'Candide', 'Voltaire', 1),
(11, 'Dracula', 'Bram Stoker', 1),
(12, 'Moby Dick', 'Herman Melville', 1),
(13, 'Les miserables', 'Victor Hugo', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
