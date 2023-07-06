--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review`
(
    `review_id`   int(11) NOT NULL,
    `user_name`   varchar(200) NOT NULL,
    `user_rating` int(1) NOT NULL,
    `user_review` text         NOT NULL,
    `datetime`    int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`)
VALUES (6, 'John Smith', 4, 'Nice Product, Value for money', 1621935691),
       (7, 'Peter Parker', 5, 'Nice Product with Good Feature.', 1621939888),
       (8, 'Donna Hubber', 1, 'Worst Product, lost my money.', 1621940010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
    ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
    MODIFY `review_id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
