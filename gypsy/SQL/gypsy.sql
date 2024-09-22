-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 15, 2023 at 02:23 AM
-- Server version: 5.7.34
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gypsy`
--
CREATE DATABASE IF NOT EXISTS `gypsy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gypsy`;

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `code` text NOT NULL,
  `name` text NOT NULL,
  `airport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `code`, `name`, `airport`) VALUES
(1, '(AUH)', 'Abu Dhabi International', 'Abu Dhabi International (AUH)'),
(2, '(AMS)', 'Amsterdam', 'Amsterdam (AMS)'),
(3, '(AMS)', 'Amsterdam Schiphol', 'Amsterdam Schiphol (AMS)'),
(4, '(BKK)', 'Bangkok', 'Bangkok (BKK)'),
(5, '(BKK)', 'Bangkok Suvarnabhumi', 'Bangkok Suvarnabhumi (BKK)'),
(6, '(BCN)', 'Barcelona El Prat', 'Barcelona El Prat (BCN)'),
(7, '(BZL)', 'Barisal', 'Barisal (BZL)'),
(8, '(PEK)', 'Beijing', 'Beijing (PEK)'),
(9, '(PEK)', 'Beijing Capital', 'Beijing Capital (PEK)'),
(10, '(BNE)', 'Brisbane Airport', 'Brisbane Airport (BNE)'),
(11, '(CPT)', 'Cape Town International', 'Cape Town International (CPT)'),
(12, '(ORD)', 'Chicago O\'Hare', 'Chicago O\'Hare (ORD)'),
(13, '(CGP)', 'Chittagong', 'Chittagong (CGP)'),
(14, '(CXB)', 'Cox\'s Bazar', 'Cox\'s Bazar (CXB)'),
(15, '(CXB)', 'Coxs Bazar', 'Coxs Bazar (CXB)'),
(16, '(DFW)', 'Dallas/Fort Worth', 'Dallas/Fort Worth (DFW)'),
(17, '(DEL)', 'Delhi Indira Gandhi', 'Delhi Indira Gandhi (DEL)'),
(18, '(DEN)', 'Denver International', 'Denver International (DEN)'),
(19, '(DAC)', 'Dhaka', 'Dhaka (DAC)'),
(20, '(DOH)', 'Doha Hamad', 'Doha Hamad (DOH)'),
(21, '(DXB)', 'Dubai', 'Dubai (DXB)'),
(22, '(DXB)', 'Dubai International', 'Dubai International (DXB)'),
(23, '(FRA)', 'Frankfurt', 'Frankfurt (FRA)'),
(24, '(OOL)', 'Gold Coast Airport', 'Gold Coast Airport (OOL)'),
(25, '(ATL)', 'Hartsfield-Jackson Atlanta', 'Hartsfield-Jackson Atlanta (ATL)'),
(26, '(HKG)', 'Hong Kong', 'Hong Kong (HKG)'),
(27, '(HKG)', 'Hong Kong International', 'Hong Kong International (HKG)'),
(28, '(IAH)', 'Houston George Bush', 'Houston George Bush (IAH)'),
(29, '(IST)', 'Istanbul', 'Istanbul (IST)'),
(30, '(IST)', 'Istanbul Ataturk', 'Istanbul Ataturk (IST)'),
(31, '(IST)', 'Istanbul New Airport', 'Istanbul New Airport (IST)'),
(32, '(JSR)', 'Jessore', 'Jessore (JSR)'),
(33, '(JNB)', 'Johannesburg O.R. Tambo', 'Johannesburg O.R. Tambo (JNB)'),
(34, '(LAS)', 'Las Vegas', 'Las Vegas (LAS)'),
(35, '(LAS)', 'Las Vegas McCarran', 'Las Vegas McCarran (LAS)'),
(36, '(LIM)', 'Lima Jorge Chavez', 'Lima Jorge Chavez (LIM)'),
(37, '(LHR)', 'London', 'London (LHR)'),
(38, '(LHR)', 'London Heathrow', 'London Heathrow (LHR)'),
(39, '(LAX)', 'Los Angeles', 'Los Angeles (LAX)'),
(40, '(LAX)', 'Los Angeles International', 'Los Angeles International (LAX)'),
(41, '(MAD)', 'Madrid Barajas', 'Madrid Barajas (MAD)'),
(42, '(MEL)', 'Melbourne', 'Melbourne (MEL)'),
(43, '(MEL)', 'Melbourne Airport', 'Melbourne Airport (MEL)'),
(44, '(MEL)', 'Melbourne Tullamarine', 'Melbourne Tullamarine (MEL)'),
(45, '(MEX)', 'Mexico City Benito Juarez', 'Mexico City Benito Juarez (MEX)'),
(46, '(MIA)', 'Miami', 'Miami (MIA)'),
(47, '(MIA)', 'Miami International', 'Miami International (MIA)'),
(48, '(SVO)', 'Moscow Sheremetyevo', 'Moscow Sheremetyevo (SVO)'),
(49, '(JFK)', 'New York', 'New York (JFK)'),
(50, '(NYC)', 'New York City', 'New York City (NYC)'),
(51, '(JFK)', 'New York JFK', 'New York JFK (JFK)'),
(52, '(LGA)', 'New York LaGuardia', 'New York LaGuardia (LGA)'),
(53, '(MCO)', 'Orlando International', 'Orlando International (MCO)'),
(54, '(CDG)', 'Paris', 'Paris (CDG)'),
(55, '(CDG)', 'Paris Charles de Gaulle', 'Paris Charles de Gaulle (CDG)'),
(56, '(RJH)', 'Rajshahi', 'Rajshahi (RJH)'),
(57, '(RAU)', 'Rangpur', 'Rangpur (RAU)'),
(58, '(GIG)', 'Rio de Janeiro Galeao', 'Rio de Janeiro Galeao (GIG)'),
(59, '(SFO)', 'San Francisco', 'San Francisco (SFO)'),
(60, '(SFO)', 'San Francisco International', 'San Francisco International (SFO)'),
(61, '(GRU)', 'Sao Paulo Guarulhos', 'Sao Paulo Guarulhos (GRU)'),
(62, '(SEA)', 'Seattle-Tacoma', 'Seattle-Tacoma (SEA)'),
(63, '(ICN)', 'Seoul Incheon', 'Seoul Incheon (ICN)'),
(64, '(SIN)', 'Singapore', 'Singapore (SIN)'),
(65, '(SIN)', 'Singapore Changi', 'Singapore Changi (SIN)'),
(66, '(SYD)', 'Sydney', 'Sydney (SYD)'),
(67, '(SYD)', 'Sydney Airport', 'Sydney Airport (SYD)'),
(68, '(SYD)', 'Sydney Kingsford-Smith', 'Sydney Kingsford-Smith (SYD)'),
(69, '(ZYL)', 'Sylhet', 'Sylhet (ZYL)'),
(70, '(HND)', 'Tokyo', 'Tokyo (HND)'),
(71, '(HND)', 'Tokyo Haneda', 'Tokyo Haneda (HND)'),
(72, '(NRT)', 'Tokyo Narita', 'Tokyo Narita (NRT)'),
(73, '(YYZ)', 'Toronto Pearson', 'Toronto Pearson (YYZ)'),
(74, '(YVR)', 'Vancouver International', 'Vancouver International (YVR)');

-- --------------------------------------------------------

--
-- Table structure for table `Attractions`
--

CREATE TABLE `Attractions` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `ticket_price` decimal(10,2) DEFAULT NULL,
  `attraction_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Attractions`
--

INSERT INTO `Attractions` (`id`, `location`, `name`, `description`, `image`, `rating`, `opening_hours`, `ticket_price`, `attraction_type`) VALUES
(1, 'Paris', 'Eiffel Tower', 'The Eiffel Tower is a wrought-iron lattice tower located in Paris, France. It is one of the most recognizable landmarks in the world and offers stunning views of the city. Visitors can ascend to the top of the tower, dine at the restaurants, and enjoy panoramic views.', 'eiffel_tower.jpg', '4.9', '9:00 AM - 12:00 AM', '25.00', 'Landmark'),
(2, 'Paris', 'Louvre Museum', 'The Louvre Museum is the worlds largest art museum and a historic monument in Paris, France. It is home to thousands of works of art, including the famous painting, Mona Lisa. Visitors can explore the museums vast collection and admire masterpieces from various periods.', 'louvre_museum.jpg', '4.8', '9:00 AM - 6:00 PM', '20.00', 'Museum'),
(3, 'Paris', 'Notre-Dame Cathedral', 'Notre-Dame Cathedral is a medieval Catholic cathedral located in Paris, France. It is a masterpiece of Gothic architecture and one of the most famous cathedrals in the world. Visitors can admire the intricate details of the cathedral and climb to the top for a panoramic view.', 'notre_dame_cathedral.jpg', '4.7', '8:00 AM - 6:45 PM', '0.00', 'Religious Site'),
(4, 'Paris', 'Montmartre', 'Montmartre is a historic neighborhood located in Paris, France. It is known for its bohemian atmosphere, charming streets, and the iconic Sacré-Cœur Basilica. Visitors can explore the artistic heritage of Montmartre, visit art studios, and enjoy panoramic views from the hilltop.', 'montmartre.jpg', '4.6', '24 Hours', '0.00', 'Neighborhood'),
(5, 'Paris', 'Seine River Cruise', 'A Seine River Cruise is a popular way to experience the beauty of Paris. Visitors can take a leisurely boat ride along the Seine River and enjoy breathtaking views of the citys landmarks, including the Eiffel Tower, Notre-Dame Cathedral, and Louvre Museum.', 'seine_river_cruise.jpg', '4.5', 'Varies', '15.00', 'Cruise'),
(6, 'Paris', 'Champs-Élysées', 'Champs-Élysées is a famous avenue in Paris, France. It is known for its luxury shops, cafes, and theaters. Visitors can stroll down the avenue, shop for high-end fashion brands, and enjoy the vibrant atmosphere of this iconic Parisian street.', 'champs_elysees.jpg', '4.4', '24 Hours', '0.00', 'Street'),
(7, 'London', 'Big Ben', 'Big Ben is the nickname for the Great Bell of the clock at the north end of the Palace of Westminster in London, United Kingdom. It is one of the most prominent symbols of London and is known for its iconic clock tower. Visitors can admire the architecture and learn about its history.', 'big_ben.jpg', '4.9', 'Varies', '0.00', 'Landmark'),
(8, 'London', 'Tower of London', 'The Tower of London is a historic castle located on the banks of the River Thames in London, United Kingdom. It has served various purposes throughout history, including a royal palace, prison, and treasury. Visitors can explore the castle, see the Crown Jewels, and learn about its intriguing past.', 'tower_of_london.jpg', '4.8', '9:00 AM - 5:30 PM', '30.00', 'Historic Site'),
(9, 'London', 'Buckingham Palace', 'Buckingham Palace is the official residence of the British monarch in London, United Kingdom. It is a symbol of the British monarchy and is known for its iconic balcony where the royal family appears during special occasions. Visitors can witness the Changing of the Guard ceremony and explore the State Rooms.', 'buckingham_palace.jpg', '4.7', 'Varies', '28.00', 'Palace'),
(10, 'London', 'British Museum', 'The British Museum is a world-renowned museum located in London, United Kingdom. It houses a vast collection of artifacts and artworks from all continents, covering thousands of years of human history. Visitors can explore the museum and discover treasures from ancient civilizations.', 'british_museum.jpg', '4.6', '10:00 AM - 5:30 PM', '0.00', 'Museum'),
(11, 'London', 'Tower Bridge', 'Tower Bridge is a combined bascule and suspension bridge located in London, United Kingdom. It is an iconic symbol of the city and crosses the River Thames. Visitors can walk across the bridge, visit the exhibition inside the towers, and enjoy panoramic views from the high-level walkways.', 'tower_bridge.jpg', '4.5', 'Varies', '12.00', 'Bridge'),
(12, 'London', 'The British Library', 'The British Library is the national library of the United Kingdom and is located in London. It is one of the largest libraries in the world and houses a vast collection of books, manuscripts, maps, and other documents. Visitors can explore the library and view its remarkable collections.', 'british_library.jpg', '4.4', 'Varies', '0.00', 'Library'),
(13, 'Rome', 'Colosseum', 'The Colosseum is an ancient amphitheater located in Rome, Italy. It is one of the most iconic landmarks in the world and a symbol of Roman engineering and architecture. Visitors can explore the ruins and learn about the history of gladiatorial contests and public spectacles.', 'colosseum.jpg', '4.9', '8:30 AM - 7:00 PM', '16.00', 'Landmark'),
(14, 'Rome', 'Vatican City', 'Vatican City is an independent city-state enclaved within Rome, Italy. It is the smallest internationally recognized independent state in the world and the spiritual and administrative headquarters of the Roman Catholic Church. Visitors can explore St. Peters Basilica, the Vatican Museums, and the Sistine Chapel.', 'vatican_city.jpg', '4.8', 'Varies', '0.00', 'Religious Site'),
(15, 'Rome', 'Trevi Fountain', 'The Trevi Fountain is a famous Baroque fountain located in Rome, Italy. It is known for its grandeur and is considered one of the most beautiful fountains in the world. Visitors can toss a coin into the fountain, a tradition believed to ensure a return to Rome.', 'trevi_fountain.jpg', '4.7', '24 Hours', '0.00', 'Fountain'),
(16, 'Rome', 'Pantheon', 'The Pantheon is a well-preserved ancient Roman temple located in Rome, Italy. It is dedicated to all the gods of pagan Rome and is known for its magnificent architecture and impressive dome. Visitors can admire the interior and learn about its fascinating history.', 'pantheon.jpg', '4.6', '9:00 AM - 7:30 PM', '0.00', 'Historic Site'),
(17, 'Rome', 'Roman Forum', 'The Roman Forum is a rectangular plaza located in the heart of Rome, Italy. It was the social, political, and commercial center of ancient Rome. Visitors can explore the ruins of temples, basilicas, and other important buildings that once stood in this historic site.', 'roman_forum.jpg', '4.5', '8:30 AM - 7:00 PM', '12.00', 'Historic Site'),
(18, 'Rome', 'Sistine Chapel', 'The Sistine Chapel is a chapel located in Vatican City, Rome, Italy. It is renowned for its stunning frescoes, including the famous ceiling painted by Michelangelo. Visitors can admire the magnificent artwork and experience the spiritual atmosphere of this sacred place.', 'sistine_chapel.jpg', '4.4', 'Varies', '0.00', 'Religious Site'),
(19, 'New York City', 'Statue of Liberty', 'The Statue of Liberty is a colossal neoclassical sculpture located on Liberty Island in New York Harbor, United States. It is a symbol of freedom and democracy and is one of the most famous landmarks in the world. Visitors can take a ferry to the island, explore the museum, and enjoy panoramic views from the crown or observation deck.', 'statue_of_liberty.jpg', '4.9', '8:30 AM - 4:00 PM', '25.00', 'Landmark'),
(20, 'New York City', 'Times Square', 'Times Square is a major commercial intersection and entertainment hub in the heart of New York City, United States. It is known for its vibrant atmosphere, dazzling billboards, and Broadway theaters. Visitors can experience the bustling energy of Times Square, shop at flagship stores, and attend live performances.', 'times_square.jpg', '4.8', '24 Hours', '0.00', 'Landmark'),
(21, 'New York City', 'Central Park', 'Central Park is a vast urban park located in the center of Manhattan, New York City, United States. It is a green oasis amidst the bustling city and offers various recreational activities. Visitors can go for a leisurely stroll, rent a rowboat, visit the Central Park Zoo, or have a picnic in this iconic park.', 'central_park.jpg', '4.7', '6:00 AM - 1:00 AM', '0.00', 'Park'),
(22, 'New York City', 'Empire State Building', 'The Empire State Building is a towering Art Deco skyscraper located in New York City, United States. It offers breathtaking views of the city from its observation decks. Visitors can ascend to the top of the building, learn about its history, and admire the panoramic vistas.', 'empire_state_building.jpg', '4.6', '8:00 AM - 2:00 AM', '38.00', 'Landmark'),
(23, 'New York City', '9/11 Memorial and Museum', 'The 9/11 Memorial and Museum is a memorial and museum located at the World Trade Center site in New York City, United States. It commemorates the September 11, 2001, terrorist attacks and honors the victims. Visitors can pay their respects at the memorial pools and explore the museum to learn about the tragic events.', '911_memorial.jpg', '4.5', 'Varies', '26.00', 'Museum'),
(24, 'New York City', 'Museum of Modern Art (MoMA)', 'Immerse yourself in contemporary and modern art at the Museum of Modern Art (MoMA). Discover a vast collection of paintings, sculptures, photography, and multimedia installations by renowned artists from around the world.', 'moma.jpg', '4.5', '10:30 AM - 05:30 PM', '25.00', 'Museum'),
(25, 'Tokyo', 'Tokyo Disneyland', 'Tokyo Disneyland is a magical theme park located in Urayasu, Chiba, Japan. It is inspired by the original Disneyland in California and offers a wide range of attractions, entertainment, and dining options. Visitors can meet Disney characters, enjoy thrilling rides, and immerse themselves in the enchanting atmosphere.', 'tokyo_disneyland.jpg', '4.9', '8:00 AM - 10:00 PM', '75.00', 'Theme Park'),
(26, 'Tokyo', 'Senso-ji Temple', 'Senso-ji Temple is an ancient Buddhist temple located in Tokyo, Japan. It is the oldest temple in the city and is dedicated to the bodhisattva Kannon. Visitors can enter through the iconic Thunder Gate, explore the temple grounds, and experience the traditional atmosphere of Asakusa.', 'sensoji_temple.jpg', '4.8', '6:00 AM - 5:00 PM', '0.00', 'Religious Site'),
(27, 'Tokyo', 'Meiji Shrine', 'Meiji Shrine is a Shinto shrine located in Tokyo, Japan. It is dedicated to Emperor Meiji and Empress Shoken. Visitors can pass through the impressive Torii gate, explore the tranquil forested area, and witness traditional Shinto rituals and ceremonies.', 'meiji_shrine.jpg', '4.7', 'Sunrise to Sunset', '0.00', 'Religious Site'),
(28, 'Tokyo', 'Shibuya Crossing', 'Shibuya Crossing is a famous pedestrian scramble located in Tokyo, Japan. It is known for its bustling intersection and vibrant atmosphere. Visitors can experience the organized chaos of thousands of people crossing the streets at once and capture the iconic Shibuya Crossing scene.', 'shibuya_crossing.jpg', '4.6', '24 Hours', '0.00', 'Landmark'),
(29, 'Tokyo', 'Tsukiji Fish Market', 'Tsukiji Fish Market was a large wholesale fish market located in Tokyo, Japan. Although the inner market has relocated, the outer market still offers a vibrant culinary experience. Visitors can explore the shops, sample fresh seafood, and immerse themselves in the lively market atmosphere.', 'tsukiji_fish_market.jpg', '4.5', 'Varies', '0.00', 'Market'),
(30, 'Tokyo', 'Tokyo Tower', 'Experience breathtaking views of Tokyo from the observation decks of Tokyo Tower. This iconic landmark offers panoramic vistas of the cityscape, and on clear days, you can even catch a glimpse of Mount Fuji in the distance.', 'tokyo_tower.jpg', '4.8', '09:00 AM - 09:00 PM', '12.00', 'Landmark'),
(31, 'Barcelona', 'Sagrada Familia', 'Visit the iconic Sagrada Familia, a magnificent basilica designed by Antoni Gaudí. Marvel at its intricate architecture, stunning stained glass windows, and climb to the top for panoramic views of Barcelona.', 'sagrada_familia.jpg', '4.9', '09:00 AM - 08:00 PM', '20.00', 'Religious Building'),
(32, 'Barcelona', 'Park Güell', 'Explore the whimsical Park Güell, another masterpiece by Antoni Gaudí. Wander through its colorful mosaic tiles, unique structures, and enjoy panoramic views of the city from its elevated terraces.', 'park_guell.jpg', '4.8', '08:00 AM - 09:30 PM', '10.00', 'Park'),
(33, 'Barcelona', 'La Rambla', 'Stroll along La Rambla, Barcelona\'s famous pedestrian boulevard. Enjoy street performances, browse local shops, visit the bustling La Boqueria market, and soak in the vibrant atmosphere of the city.', 'la_rambla.jpg', '4.7', '24/7', '0.00', 'Street'),
(34, 'Barcelona', 'Gothic Quarter', 'Immerse yourself in the history and charm of the Gothic Quarter. Explore its narrow streets, visit ancient churches, discover hidden squares, and admire the Gothic architecture that defines this historic neighborhood.', 'gothic_quarter.jpg', '4.6', '24/7', '0.00', 'Neighborhood'),
(35, 'Barcelona', 'Casa Batlló', 'Step into the enchanting world of Casa Batlló, a stunning residential building designed by Antoni Gaudí. Admire its unique facade, colorful mosaic tiles, and visit the interior to witness Gaudí\'s architectural genius.', 'casa_batllo.jpg', '4.5', '09:00 AM - 09:00 PM', '25.00', 'Architectural Site'),
(36, 'Barcelona', 'Camp Nou', 'Experience the passion of FC Barcelona at Camp Nou, the legendary football stadium. Take a guided tour, visit the museum, and walk through the player tunnel to feel the excitement of the pitch.', 'camp_nou.jpg', '4.4', '10:00 AM - 06:30 PM', '30.00', 'Sports Venue'),
(37, 'Sydney', 'Sydney Opera House', 'Marvel at the iconic Sydney Opera House, a masterpiece of modern architecture. Take a guided tour to explore its stunning interior, enjoy a performance at one of its world-class venues, or simply admire its beauty from the outside.', 'sydney_opera_house.jpg', '4.9', '10:00 AM - 05:00 PM', '30.00', 'Landmark'),
(38, 'Sydney', 'Sydney Harbour Bridge', 'Climb or walk across the Sydney Harbour Bridge for breathtaking views of the city and the harbor. Learn about its fascinating history, or take a thrilling bridge climb experience for an unforgettable adventure.', 'sydney_harbour_bridge.jpg', '4.8', '24/7', '15.00', 'Bridge'),
(39, 'Sydney', 'Bondi Beach', 'Relax and soak up the sun at Bondi Beach, one of Sydney\'s most famous beaches. Swim in its turquoise waters, catch some waves, or simply unwind on the sandy shore while enjoying the vibrant beach culture.', 'bondi_beach.jpg', '4.7', '24/7', '0.00', 'Beach'),
(40, 'Sydney', 'Darling Harbour', 'Experience the lively atmosphere of Darling Harbour, a vibrant waterfront precinct. Enjoy waterfront dining, visit the SEA LIFE Sydney Aquarium, catch a show at the IMAX Theatre, or simply take a leisurely stroll along the harbor.', 'darling_harbour.jpg', '4.6', '24/7', '0.00', 'Waterfront'),
(41, 'Sydney', 'The Rocks', 'Step back in time and explore The Rocks, Sydney\'s historic neighborhood. Wander through its cobblestone streets, visit heritage buildings, discover charming pubs, and learn about the city\'s colonial past.', 'the_rocks.jpg', '4.5', '24/7', '0.00', 'Neighborhood'),
(42, 'Sydney', 'Taronga Zoo', 'Get up close and personal with a variety of wildlife at Taronga Zoo. Explore the zoo\'s extensive collection of animals, enjoy educational talks and presentations, and soak in stunning views of Sydney Harbour.', 'taronga_zoo.jpg', '4.4', '09:30 AM - 04:30 PM', '40.00', 'Zoo'),
(43, 'Cairo', 'Pyramids of Giza', 'Discover the ancient wonders of the Pyramids of Giza, including the Great Pyramid of Khufu, the Pyramid of Khafre, and the Pyramid of Menkaure. Explore the surrounding complex, learn about their fascinating history, and marvel at their impressive size.', 'pyramids_of_giza.jpg', '4.9', '08:00 AM - 05:00 PM', '100.00', 'Archaeological Site'),
(44, 'Cairo', 'Egyptian Museum', 'Immerse yourself in the rich history of Egypt at the Egyptian Museum. Admire the vast collection of ancient artifacts, including the treasures of Tutankhamun, statues, jewelry, and mummies that offer a glimpse into the fascinating ancient Egyptian civilization.', 'egyptian_museum.jpg', '4.8', '09:00 AM - 05:00 PM', '80.00', 'Museum'),
(45, 'Cairo', 'Khan El Khalili Bazaar', 'Experience the vibrant atmosphere of the Khan El Khalili Bazaar, one of the oldest and most famous markets in Cairo. Explore its narrow streets filled with shops selling spices, jewelry, textiles, and souvenirs, and immerse yourself in the bustling local culture.', 'khan_el_khalili_bazaar.jpg', '4.7', '09:00 AM - 10:00 PM', '0.00', 'Market'),
(46, 'Cairo', 'Islamic Cairo', 'Step back in time and explore the historic district of Islamic Cairo. Visit landmarks such as the Al-Azhar Mosque, Sultan Hassan Mosque, and Al-Muizz Street, lined with ancient mosques, madrasas, and architectural gems that showcase the city\'s Islamic heritage.', 'islamic_cairo.jpg', '4.6', '24/7', '0.00', 'Historical District'),
(47, 'Cairo', 'Citadel of Saladin', 'Visit the Citadel of Saladin, a medieval fortress that offers panoramic views of Cairo. Explore its architectural wonders, including the impressive Mosque of Muhammad Ali, and learn about its historical significance as a military stronghold.', 'citadel_of_saladin.jpg', '4.5', '08:00 AM - 05:00 PM', '50.00', 'Historical Site'),
(48, 'Cairo', 'Nile River Cruise', 'Embark on a memorable Nile River cruise and experience the beauty of Cairo from the water. Enjoy a leisurely boat ride, admire the city\'s skyline, and witness stunning views of landmarks such as the Cairo Tower, Cairo Opera House, and bustling river life.', 'nile_river_cruise.jpg', '4.4', 'Dependent on Cruise', '150.00', 'Cruise Experience'),
(49, 'Rio de Janeiro', 'Christ the Redeemer', 'Marvel at the iconic Christ the Redeemer statue, standing tall atop the Corcovado mountain. Enjoy breathtaking views of Rio de Janeiro from this famous landmark and witness the beauty of its intricate design and panoramic vistas.', 'christ_the_redeemer.jpg', '4.9', '08:00 AM - 07:00 PM', '30.00', 'Landmark'),
(50, 'Rio de Janeiro', 'Copacabana Beach', 'Relax and soak up the sun at the vibrant Copacabana Beach. With its golden sands, crystal-clear waters, and lively atmosphere, this iconic beach offers a perfect blend of natural beauty and energetic beach culture.', 'copacabana_beach.jpg', '4.8', '24/7', '0.00', 'Beach'),
(51, 'Rio de Janeiro', 'Sugarloaf Mountain', 'Take a cable car ride to the top of Sugarloaf Mountain and witness breathtaking panoramic views of Rio de Janeiro. Enjoy the stunning landscapes, explore hiking trails, and experience the thrill of being surrounded by nature.', 'sugarloaf_mountain.jpg', '4.7', '09:00 AM - 08:00 PM', '50.00', 'Natural Attraction'),
(52, 'Rio de Janeiro', 'Tijuca National Park', 'Immerse yourself in the lush greenery of Tijuca National Park, the largest urban forest in the world. Explore its diverse ecosystems, hike through scenic trails, and discover beautiful waterfalls and exotic wildlife.', 'tijuca_national_park.jpg', '4.6', '07:00 AM - 05:00 PM', '20.00', 'National Park'),
(53, 'Rio de Janeiro', 'Lapa Neighborhood', 'Experience the vibrant nightlife of Rio de Janeiro at the Lapa neighborhood. Known for its lively samba clubs, bars, and street parties, Lapa offers a vibrant atmosphere, live music, and a chance to dance the night away.', 'lapa_neighborhood.jpg', '4.5', 'Varies by Venue', '0.00', 'Nightlife'),
(54, 'Rio de Janeiro', 'Santa Teresa Tram', 'Ride the charming Santa Teresa Tram and explore the historic Santa Teresa neighborhood. Enjoy the vintage tram experience, discover colonial architecture, art galleries, and cozy cafes, and immerse yourself in the bohemian charm of the area.', 'santa_teresa_tram.jpg', '4.4', '08:00 AM - 05:00 PM', '5.00', 'Transportation'),
(55, 'Cape Town', 'Table Mountain', 'Ascend to the top of Table Mountain and enjoy breathtaking views of Cape Town and its surrounding coastline. Explore hiking trails, marvel at the unique flora, and experience the beauty of this iconic natural landmark.', 'table_mountain.jpg', '4.9', '08:00 AM - 06:00 PM', '25.00', 'Natural Attraction'),
(56, 'Cape Town', 'Robben Island', 'Visit Robben Island, a UNESCO World Heritage Site, and learn about its history as a political prison during apartheid. Take a guided tour and hear firsthand accounts of its significance in South Africa\'s struggle for freedom.', 'robben_island.jpg', '4.8', '09:00 AM - 05:00 PM', '35.00', 'Historical Site'),
(57, 'Cape Town', 'Victoria & Alfred Waterfront', 'Explore the vibrant Victoria & Alfred Waterfront, a bustling harbor area with a wide range of shopping, dining, and entertainment options. Enjoy stunning views, visit the Two Oceans Aquarium, or take a boat trip to nearby attractions.', 'victoria_alfred_waterfront.jpg', '4.7', '10:00 AM - 09:00 PM', '0.00', 'Waterfront'),
(58, 'Cape Town', 'Cape of Good Hope', 'Discover the Cape of Good Hope, a scenic headland at the southwestern tip of Africa. Enjoy picturesque coastal views, hike along stunning trails, and spot diverse wildlife in the Cape Point Nature Reserve.', 'cape_of_good_hope.jpg', '4.6', '06:00 AM - 06:00 PM', '40.00', 'Natural Attraction'),
(59, 'Cape Town', 'Kirstenbosch National Botanical Garden', 'Immerse yourself in the beauty of Kirstenbosch National Botanical Garden, known for its diverse flora, stunning landscapes, and breathtaking views of Table Mountain. Take a leisurely stroll or enjoy a picnic amidst the serene surroundings.', 'kirstenbosch_garden.jpg', '4.5', '08:00 AM - 06:00 PM', '15.00', 'Garden'),
(60, 'Cape Town', 'District Six Museum', 'Visit the District Six Museum and learn about the forced removals and the impact of apartheid in the District Six neighborhood of Cape Town. Explore the exhibits, hear personal stories, and gain insight into South Africa\'s history.', 'district_six_museum.jpg', '4.4', '09:00 AM - 04:00 PM', '20.00', 'Museum'),
(61, 'Amsterdam', 'Anne Frank House', 'Visit the Anne Frank House and explore the hiding place where Anne Frank and her family lived during World War II. Gain insight into the life and legacy of Anne Frank through exhibits and preserved artifacts.', 'anne_frank_house.jpg', '4.8', '09:00 AM - 10:00 PM', '14.00', 'Historical Site'),
(62, 'Amsterdam', 'Rijksmuseum', 'Discover the artistic treasures of the Netherlands at the Rijksmuseum. Admire masterpieces by Rembrandt, Vermeer, and other renowned Dutch artists. Explore the diverse collection of paintings, sculptures, and historical artifacts.', 'rijksmuseum.jpg', '4.7', '09:00 AM - 05:00 PM', '20.00', 'Museum'),
(63, 'Amsterdam', 'Van Gogh Museum', 'Immerse yourself in the world of Vincent van Gogh at the Van Gogh Museum. View a vast collection of his paintings, drawings, and personal letters. Gain insight into the life and artistic journey of one of history\'s most celebrated artists.', 'van_gogh_museum.jpg', '4.6', '09:00 AM - 06:00 PM', '19.00', 'Museum'),
(64, 'Amsterdam', 'Vondelpark', 'Relax and unwind in the serene surroundings of Vondelpark, Amsterdam\'s largest park. Enjoy a leisurely stroll, rent a bike, or have a picnic amidst beautiful greenery and scenic landscapes. Experience the vibrant atmosphere of this beloved park.', 'vondelpark.jpg', '4.5', '24 Hours', '0.00', 'Park'),
(65, 'Amsterdam', 'Amsterdam Canal Cruise', 'Embark on a scenic canal cruise and explore the picturesque waterways of Amsterdam. Cruise past charming canal houses, iconic bridges, and historic landmarks. Learn about the city\'s rich history and architecture while enjoying the beautiful views.', 'amsterdam_canal_cruise.jpg', '4.4', '10:00 AM - 06:00 PM', '25.00', 'Boat Tour'),
(66, 'Amsterdam', 'Dam Square', 'Visit Dam Square, the vibrant heart of Amsterdam. Admire the Royal Palace, explore the nearby shopping streets, and witness the lively atmosphere of this historic square. Enjoy street performances, restaurants, and cultural events.', 'dam_square.jpg', '4.3', '24 Hours', '0.00', 'Square'),
(67, 'Dubai', 'Burj Khalifa', 'Experience the iconic Burj Khalifa, the tallest building in the world. Take in breathtaking views from the observation deck on the 148th floor. Witness the dazzling Dubai skyline and enjoy dining and entertainment options at this architectural marvel.', 'burj_khalifa.jpg', '4.9', '08:30 AM - 11:00 PM', '149.00', 'Landmark'),
(68, 'Dubai', 'Dubai Mall', 'Shop till you drop at the renowned Dubai Mall, one of the largest shopping centers in the world. Explore a wide range of retail stores, indulge in delicious dining options, visit the Dubai Aquarium & Underwater Zoo, and be amazed by the Dubai Fountain.', 'dubai_mall.jpg', '4.8', '10:00 AM - 12:00 AM', '0.00', 'Shopping Mall'),
(69, 'Dubai', 'Palm Jumeirah', 'Discover the luxurious Palm Jumeirah, an artificial archipelago shaped like a palm tree. Enjoy pristine beaches, world-class resorts, upscale dining, and thrilling water sports. Take a stroll along the Palm Jumeirah Boardwalk and enjoy the stunning views.', 'palm_jumeirah.jpg', '4.7', '24 Hours', '0.00', 'Beach'),
(70, 'Dubai', 'Dubai Marina', 'Experience the vibrant atmosphere of Dubai Marina, a bustling waterfront community. Take a leisurely walk along the marina promenade, dine at exquisite restaurants, shop at trendy boutiques, and enjoy stunning views of the waterfront and skyscrapers.', 'dubai_marina.jpg', '4.6', '24 Hours', '0.00', 'Waterfront'),
(71, 'Dubai', 'Jumeirah Mosque', 'Visit the magnificent Jumeirah Mosque, one of Dubai\'s most iconic landmarks. Admire the stunning architecture and learn about Islamic culture and traditions through guided tours. Capture beautiful photographs of this grand mosque.', 'jumeirah_mosque.jpg', '4.5', '09:00 AM - 05:00 PM', '25.00', 'Religious Site'),
(72, 'Dubai', 'Dubai Creek', 'Explore the historic Dubai Creek, a natural seawater inlet that divides the city into two main sections, Bur Dubai and Deira. Enjoy a traditional abra boat ride, visit the Gold and Spice Souks, and experience the rich heritage and trading history of Dubai.', 'dubai_creek.jpg', '4.4', '24 Hours', '0.00', 'Waterfront'),
(73, 'Berlin', 'Brandenburg Gate', 'Marvel at the iconic Brandenburg Gate, a symbol of unity and peace. This neoclassical monument is located in the heart of Berlin and has witnessed significant historical events. Take a stroll through Pariser Platz and enjoy the vibrant atmosphere.', 'brandenburg_gate.jpg', '4.8', '24 Hours', '0.00', 'Landmark'),
(74, 'Berlin', 'Berlin Wall Memorial', 'Learn about the history of the Berlin Wall at the Berlin Wall Memorial. Explore the outdoor exhibition, see remnants of the wall, visit the Chapel of Reconciliation, and gain insights into the division of Berlin during the Cold War.', 'berlin_wall_memorial.jpg', '4.7', '10:00 AM - 06:00 PM', '0.00', 'Historical Site'),
(75, 'Berlin', 'Museum Island', 'Immerse yourself in culture at Museum Island, a UNESCO World Heritage Site. Visit world-class museums, including the Pergamon Museum, Neues Museum, Bode Museum, Alte Nationalgalerie, and Altes Museum. Explore art, archaeology, and history all in one place.', 'museum_island.jpg', '4.6', '10:00 AM - 06:00 PM', '15.00', 'Museum'),
(76, 'Berlin', 'Reichstag Building', 'Visit the Reichstag Building, the seat of the German Bundestag (Parliament). Take a guided tour to learn about German politics, enjoy panoramic views from the dome, and admire the modern architecture blending with historical elements.', 'reichstag_building.jpg', '4.5', '08:00 AM - 12:00 AM', '0.00', 'Landmark'),
(77, 'Berlin', 'Checkpoint Charlie', 'Step back in time at Checkpoint Charlie, the famous border crossing between East and West Berlin during the Cold War era. Explore the outdoor exhibition, see historical photographs, and learn about the stories of those who attempted to cross the border.', 'checkpoint_charlie.jpg', '4.4', '24 Hours', '0.00', 'Historical Site'),
(78, 'Berlin', 'Tiergarten Park', 'Escape the bustling city at Tiergarten Park, Berlin\'s largest and most popular park. Enjoy a leisurely walk or bike ride through lush greenery, visit the Berlin Zoo, and relax by the lakes. It\'s a perfect retreat for nature lovers.', 'tiergarten_park.jpg', '4.3', '24 Hours', '0.00', 'Park'),
(79, 'Bangkok', 'Grand Palace', 'Experience the grandeur of the Grand Palace, a complex of stunning buildings that served as the official residence of the Thai kings for over two centuries. Admire the intricate architecture, intricate details, and the famous Emerald Buddha.', 'grand_palace.jpg', '4.8', '08:30 AM - 03:30 PM', '20.00', 'Landmark'),
(80, 'Bangkok', 'Wat Arun', 'Marvel at the beauty of Wat Arun, also known as the Temple of Dawn. This iconic Buddhist temple stands majestically on the banks of the Chao Phraya River. Climb to the top for panoramic views of Bangkok and witness the exquisite craftsmanship.', 'wat_arun.jpg', '4.7', '08:30 AM - 05:30 PM', '5.00', 'Religious Site'),
(81, 'Bangkok', 'Chatuchak Weekend Market', 'Indulge in a shopping extravaganza at Chatuchak Weekend Market, one of the largest markets in the world. Explore thousands of stalls selling a wide range of products, from clothing and accessories to handicrafts and street food.', 'chatuchak_market.jpg', '4.6', '09:00 AM - 06:00 PM', '0.00', 'Market'),
(82, 'Bangkok', 'Wat Phra Kaew', 'Visit Wat Phra Kaew, the Temple of the Emerald Buddha, located within the grounds of the Grand Palace. Admire the revered Emerald Buddha statue, intricately carved structures, and stunning murals depicting Thai mythology and history.', 'wat_phra_kaew.jpg', '4.5', '08:30 AM - 03:30 PM', '10.00', 'Religious Site'),
(83, 'Bangkok', 'Floating Markets', 'Experience the unique atmosphere of the floating markets in Bangkok. Hop on a boat and explore markets like Damnoen Saduak or Amphawa, where vendors sell fresh produce, local delicacies, and handicrafts from their boats.', 'floating_markets.jpg', '4.4', 'Varies by Market', '0.00', 'Market'),
(84, 'Bangkok', 'Jim Thompson House', 'Discover the cultural heritage of Thailand at the Jim Thompson House, a museum showcasing traditional Thai architecture and art. Learn about the fascinating life of Jim Thompson, an American entrepreneur who played a significant role in reviving Thai silk.', 'jim_thompson_house.jpg', '4.3', '09:00 AM - 06:00 PM', '6.00', 'Museum'),
(85, 'Istanbul', 'Hagia Sophia', 'Step into the architectural marvel of Hagia Sophia, a historic and cultural landmark that has witnessed the rise and fall of empires. Admire the stunning Byzantine architecture, intricate mosaics, and the unique blend of Christian and Islamic influences.', 'hagia_sophia.jpg', '4.8', '09:00 AM - 07:00 PM', '20.00', 'Museum'),
(86, 'Istanbul', 'Blue Mosque', 'Visit the magnificent Blue Mosque, officially known as the Sultan Ahmed Mosque. Marvel at its grandeur, intricate tilework, and the impressive dome. Experience the serene ambiance and witness the beauty of Islamic architecture and design.', 'blue_mosque.jpg', '4.7', 'Open 24 hours', '0.00', 'Religious Site'),
(87, 'Istanbul', 'Topkapi Palace', 'Explore the opulent Topkapi Palace, once the residence of the Ottoman sultans. Discover its rich history, visit the imperial treasury, and admire the stunning views of the Bosphorus. Don\'t miss the exquisite collection of Ottoman artifacts and the Harem section.', 'topkapi_palace.jpg', '4.6', '09:00 AM - 06:45 PM', '15.00', 'Palace'),
(88, 'Istanbul', 'Grand Bazaar', 'Immerse yourself in the vibrant atmosphere of the Grand Bazaar, one of the oldest and largest covered markets in the world. Browse through thousands of shops selling textiles, ceramics, spices, jewelry, and more. Experience the hustle and bustle of this iconic market.', 'grand_bazaar.jpg', '4.5', '09:00 AM - 07:00 PM', '0.00', 'Market'),
(89, 'Istanbul', 'Basilica Cistern', 'Discover the hidden gem of Basilica Cistern, an underground ancient water reservoir with mesmerizing columns and atmospheric lighting. Explore the atmospheric walkways and encounter the Medusa heads. It\'s a unique and fascinating place to visit.', 'basilica_cistern.jpg', '4.4', '09:00 AM - 05:30 PM', '10.00', 'Historical Site'),
(90, 'Istanbul', 'Spice Bazaar', 'Delight your senses at the Spice Bazaar, also known as the Egyptian Bazaar. Experience the aromas of spices, teas, and Turkish delights as you explore the colorful stalls. Discover a variety of herbs, dried fruits, and traditional Turkish products.', 'spice_bazaar.jpg', '4.3', '08:00 AM - 07:00 PM', '0.00', 'Market'),
(91, 'Moscow', 'Red Square', 'Visit the iconic Red Square, a historic and cultural center in Moscow. Marvel at the magnificent Saint Basil\'s Cathedral, explore the history of the Kremlin, and soak in the vibrant atmosphere of this UNESCO World Heritage Site.', 'red_square.jpg', '4.8', 'Open 24 hours', '0.00', 'Landmark'),
(92, 'Moscow', 'The Kremlin', 'Explore the grandeur of the Kremlin, a fortified complex housing historic palaces, cathedrals, and government offices. Discover the treasures of Russian history, visit the Armory Chamber, and admire the stunning architecture of this symbol of power.', 'kremlin.jpg', '4.7', '10:00 AM - 05:00 PM', '15.00', 'Historical Site'),
(93, 'Moscow', 'Saint Basil\'s Cathedral', 'Admire the iconic Saint Basil\'s Cathedral, a masterpiece of Russian architecture. Marvel at its vibrant and colorful onion domes, intricate details, and unique design. Step inside to discover the beautiful interior and the history behind this renowned landmark.', 'saint_basil_cathedral.jpg', '4.6', '10:00 AM - 06:00 PM', '12.00', 'Religious Site'),
(94, 'Moscow', 'Bolshoi Theatre', 'Experience world-class performances at the Bolshoi Theatre, one of the most renowned opera and ballet theaters in the world. Enjoy the opulent interiors, watch captivating shows, and witness the talent of the performers in this cultural gem.', 'bolshoi_theatre.jpg', '4.5', 'Showtimes vary', '30.00', 'Theatre'),
(95, 'Moscow', 'GUM Department Store', 'Indulge in luxury shopping at the GUM Department Store, located on Red Square. Explore a wide range of high-end fashion brands, luxury goods, and gourmet delicacies. Experience the elegant ambiance and architecture of this historic shopping destination.', 'gum_department_store.jpg', '4.4', '10:00 AM - 10:00 PM', '0.00', 'Shopping Mall'),
(96, 'Moscow', 'Tretyakov Gallery', 'Immerse yourself in Russian art at the Tretyakov Gallery, home to an extensive collection of Russian masterpieces. Admire iconic works by artists like Ivan Aivazovsky, Ivan Shishkin, and Wassily Kandinsky. Discover the rich cultural heritage through art.', 'tretyakov_gallery.jpg', '4.3', '10:00 AM - 06:00 PM', '10.00', 'Art Museum'),
(97, 'Los Angeles', 'Universal Studios Hollywood', 'Experience the magic of Hollywood at Universal Studios. Enjoy thrilling rides, shows, and attractions based on blockbuster movies. Get up close with your favorite characters and immerse yourself in the world of entertainment.', 'universal_studios.jpg', '4.7', '10:00 AM - 6:00 PM', '109.99', 'Theme Park'),
(98, 'Los Angeles', 'Griffith Observatory', 'Visit the Griffith Observatory for stunning views of the Los Angeles skyline and the stars above. Explore interactive exhibits, witness captivating planetarium shows, and learn about astronomy and space science in this iconic landmark.', 'griffith_observatory.jpg', '4.6', '12:00 PM - 10:00 PM', '0.00', 'Observatory'),
(99, 'Los Angeles', 'Hollywood Walk of Fame', 'Stroll along the Hollywood Walk of Fame and discover the stars honoring celebrities from the world of entertainment. Take pictures with your favorite stars, soak in the Hollywood atmosphere, and explore nearby attractions and theaters.', 'hollywood_walk_of_fame.jpg', '4.5', 'Open 24 hours', '0.00', 'Landmark'),
(100, 'Los Angeles', 'Santa Monica Pier', 'Experience the vibrant atmosphere of Santa Monica Pier, a lively entertainment destination. Enjoy thrilling rides at Pacific Park, indulge in delicious food, explore shops and street performers, and soak in the breathtaking views of the Pacific Ocean.', 'santa_monica_pier.jpg', '4.4', '10:00 AM - 11:00 PM', '0.00', 'Landmark'),
(101, 'Los Angeles', 'Getty Center', 'Discover art, culture, and stunning architecture at the Getty Center. Explore a vast collection of European paintings, sculptures, decorative arts, and more. Enjoy the panoramic views of Los Angeles and immerse yourself in this world-class museum.', 'getty_center.jpg', '4.3', '10:00 AM - 5:30 PM', '0.00', 'Art Museum'),
(102, 'Los Angeles', 'The Griffith Park', 'Escape to nature in Griffith Park, one of the largest urban parks in North America. Enjoy hiking trails, picnic areas, golf courses, and the famous Griffith Observatory. Experience the tranquility and beauty of nature within the bustling city.', 'griffith_park.jpg', '4.2', 'Open 24 hours', '0.00', 'Park'),
(103, 'Mumbai', 'Gateway of India', 'Visit the iconic Gateway of India, a historic monument and one of Mumbai\'s most prominent landmarks. Marvel at its impressive architecture, enjoy views of the Arabian Sea, and explore the bustling atmosphere surrounding this grand structure.', 'gateway_of_india.jpg', '4.6', 'Open 24 hours', '0.00', 'Landmark'),
(104, 'Mumbai', 'Elephanta Caves', 'Explore the ancient Elephanta Caves, a UNESCO World Heritage Site located on Elephanta Island. Admire the intricate rock-cut sculptures and temples dedicated to Lord Shiva, and learn about the rich cultural and religious history of the region.', 'elephanta_caves.jpg', '4.5', '9:00 AM - 5:30 PM', '500.00', 'Historical Site'),
(105, 'Mumbai', 'Marine Drive', 'Take a leisurely stroll along Marine Drive, a picturesque promenade overlooking the Arabian Sea. Enjoy the scenic views, witness the beautiful sunset, and experience the vibrant atmosphere of this popular hangout spot in Mumbai.', 'marine_drive.jpg', '4.4', 'Open 24 hours', '0.00', 'Landmark'),
(106, 'Mumbai', 'Siddhivinayak Temple', 'Seek blessings at the Siddhivinayak Temple, a revered Hindu temple dedicated to Lord Ganesha. Experience the spiritual ambiance, witness the religious rituals, and pay homage to the elephant-headed deity.', 'siddhivinayak_temple.jpg', '4.3', '5:30 AM - 10:00 PM', '0.00', 'Religious Site'),
(107, 'Mumbai', 'Chhatrapati Shivaji Terminus', 'Marvel at the architectural splendor of Chhatrapati Shivaji Terminus, a UNESCO World Heritage Site and a historic railway station in Mumbai. Admire its Victorian Gothic style, intricate details, and be a part of the bustling transportation hub.', 'chhatrapati_shivaji_terminus.jpg', '4.2', 'Open 24 hours', '0.00', 'Landmark'),
(108, 'Mumbai', 'Juhu Beach', 'Relax and unwind at Juhu Beach, a popular beach destination in Mumbai. Take a leisurely walk on the sandy shores, indulge in local street food, and enjoy the lively atmosphere with stunning views of the Arabian Sea.', 'juhu_beach.jpg', '4.1', 'Open 24 hours', '0.00', 'Beach'),
(109, 'Toronto', 'CN Tower', 'Visit the CN Tower, an iconic landmark and one of the tallest freestanding structures in the world. Enjoy panoramic views of Toronto from the observation deck, indulge in fine dining at the revolving restaurant, and experience the thrilling EdgeWalk.', 'cn_tower.jpg', '4.7', '9:00 AM - 10:30 PM', '35.00', 'Landmark'),
(110, 'Toronto', 'Royal Ontario Museum', 'Explore the Royal Ontario Museum, Canada\'s largest museum of art, culture, and natural history. Discover a vast collection of exhibits ranging from ancient civilizations to modern artworks, and immerse yourself in the fascinating world of human history and culture.', 'royal_ontario_museum.jpg', '4.5', '10:00 AM - 5:30 PM', '30.00', 'Museum'),
(111, 'Toronto', 'Distillery District', 'Stroll through the historic Distillery District, a pedestrian-only village with Victorian-era industrial architecture. Experience the vibrant arts, culture, and entertainment scene, browse through art galleries and boutiques, and savor delicious food and drinks in charming cafes and restaurants.', 'distillery_district.jpg', '4.4', 'Varies by establishment', '0.00', 'Neighborhood'),
(112, 'Toronto', 'Toronto Islands', 'Escape to the Toronto Islands, a group of small islands located just off the coast of downtown Toronto. Enjoy beautiful beaches, scenic walking trails, picnic areas, and recreational activities such as kayaking, biking, and boating.', 'toronto_islands.jpg', '4.3', 'Varies by season', '0.00', 'Natural Site'),
(113, 'Toronto', 'Ripley\'s Aquarium of Canada', 'Discover marine life at Ripley\'s Aquarium of Canada, located at the base of the CN Tower. Immerse yourself in underwater tunnels, get up close with sharks and stingrays, and learn about various marine ecosystems through interactive exhibits.', 'ripleys_aquarium.jpg', '4.2', '9:00 AM - 11:00 PM', '40.00', 'Aquarium'),
(114, 'Toronto', 'Hockey Hall of Fame', 'Celebrate Canada\'s national sport at the Hockey Hall of Fame. Explore exhibits showcasing hockey memorabilia, interactive games, and the Stanley Cup. Learn about the sport\'s history and legends, and even try your hand at shooting and goaltending.', 'hockey_hall_of_fame.jpg', '4.1', '10:00 AM - 5:00 PM', '30.00', 'Museum'),
(115, 'Athens', 'Acropolis of Athens', 'Visit the Acropolis of Athens, an ancient citadel located on a rocky outcrop above the city. Explore the iconic Parthenon, the Propylaea, the Erechtheion, and other architectural masterpieces that represent the glory of ancient Greece.', 'acropolis.jpg', '4.8', '8:00 AM - 8:00 PM', '20.00', 'Historical Site'),
(116, 'Athens', 'Plaka Neighborhood', 'Discover the charming Plaka neighborhood, known as the \"Neighborhood of the Gods.\" Wander through its narrow streets lined with neoclassical buildings, explore traditional shops, enjoy local cuisine in tavernas, and soak up the vibrant atmosphere.', 'plaka_neighborhood.jpg', '4.6', 'Varies by establishment', '0.00', 'Neighborhood'),
(117, 'Athens', 'National Archaeological Museum', 'Immerse yourself in ancient Greek art and history at the National Archaeological Museum. Admire a vast collection of artifacts, including sculptures, pottery, jewelry, and frescoes that span over thousands of years of Greek civilization.', 'national_archaeological_museum.jpg', '4.5', '8:00 AM - 8:00 PM', '15.00', 'Museum'),
(118, 'Athens', 'Temple of Olympian Zeus', 'Explore the Temple of Olympian Zeus, once the largest temple in Greece. Marvel at the towering columns that remain, and imagine the grandeur of the temple dedicated to Zeus, the king of the Greek gods.', 'temple_of_olympian_zeus.jpg', '4.3', '8:00 AM - 8:00 PM', '10.00', 'Historical Site'),
(119, 'Athens', 'Monastiraki Flea Market', 'Experience the vibrant Monastiraki Flea Market, a bustling bazaar offering a wide range of goods, from antiques and souvenirs to clothing and handmade crafts. Bargain with local vendors, sample Greek street food, and soak up the lively atmosphere.', 'monastiraki_flea_market.jpg', '4.2', 'Varies by establishment', '0.00', 'Market'),
(120, 'Athens', 'Panathenaic Stadium', 'Step into history at the Panathenaic Stadium, the birthplace of the modern Olympic Games. Explore the marble stadium, walk along the track, and visit the Olympic Museum to learn about the ancient and modern Olympic history.', 'panathenaic_stadium.jpg', '4.1', '8:00 AM - 7:00 PM', '8.00', 'Landmark'),
(121, 'Prague', 'Prague Castle', 'Explore Prague Castle, one of the largest castle complexes in the world. Admire stunning architecture, visit St. Vitus Cathedral, stroll through the picturesque Golden Lane, and enjoy panoramic views of the city from the castle grounds.', 'prague_castle.jpg', '4.8', '9:00 AM - 5:00 PM', '12.00', 'Historical Site'),
(122, 'Prague', 'Charles Bridge', 'Cross the iconic Charles Bridge, a historic stone bridge that spans the Vltava River. Marvel at the baroque statues lining the bridge, enjoy scenic views of the city, and experience the lively atmosphere created by street performers and local artists.', 'charles_bridge.jpg', '4.7', 'Open 24 hours', '0.00', 'Landmark'),
(123, 'Prague', 'Old Town Square', 'Visit the lively Old Town Square, the heart of Prague\'s historic center. Admire the intricate Gothic architecture of the Old Town Hall with its famous Astronomical Clock, enjoy outdoor cafes, and soak up the vibrant atmosphere of this bustling square.', 'old_town_square.jpg', '4.6', 'Varies by establishment', '0.00', 'Square'),
(124, 'Prague', 'Prague Astronomical Clock', 'Witness the beauty of the Prague Astronomical Clock, a medieval astronomical clock located on the Old Town Hall. Watch the hourly performance of the moving statues and astronomical dial, and learn about the fascinating history of this centuries-old timepiece.', 'prague_astronomical_clock.jpg', '4.5', 'Varies by season', '0.00', 'Landmark'),
(125, 'Prague', 'St. Vitus Cathedral', 'Marvel at the stunning St. Vitus Cathedral, a masterpiece of Gothic architecture located within the Prague Castle complex. Admire its intricate stained glass windows, intricate sculptures, and climb the tower for breathtaking views of the city.', 'st_vitus_cathedral.jpg', '4.4', '9:00 AM - 5:00 PM', '10.00', 'Religious Site'),
(126, 'Prague', 'Petrin Hill and Observation Tower', 'Ascend Petrin Hill and visit the Observation Tower for panoramic views of Prague. Enjoy a leisurely stroll through beautiful gardens, visit the Mirror Maze, and explore other attractions on this peaceful hilltop.', 'petrin_hill.jpg', '4.3', '9:00 AM - 8:00 PM', '6.00', 'Park'),
(127, 'Florence', 'Duomo di Firenze', 'Visit the Duomo di Firenze, the iconic Florence Cathedral. Marvel at its magnificent dome, climb to the top for panoramic views of the city, and admire the stunning interior adorned with beautiful frescoes and artworks.', 'duomo_di_firenze.jpg', '4.8', '10:00 AM - 5:00 PM', '15.00', 'Religious Site'),
(128, 'Florence', 'Uffizi Gallery', 'Explore the Uffizi Gallery, one of the world\'s most famous art museums. Admire masterpieces by renowned artists such as Botticelli, Michelangelo, and Leonardo da Vinci, and immerse yourself in the rich history of Italian art.', 'uffizi_gallery.jpg', '4.7', '10:00 AM - 6:00 PM', '20.00', 'Museum'),
(129, 'Florence', 'Ponte Vecchio', 'Cross the Ponte Vecchio, a medieval stone bridge spanning the Arno River. Discover its unique shops, showcasing jewelry, art, and souvenirs, and enjoy picturesque views of the river and the charming buildings lining its banks.', 'ponte_vecchio.jpg', '4.6', 'Open 24 hours', '0.00', 'Landmark'),
(130, 'Florence', 'Piazza della Signoria', 'Visit Piazza della Signoria, the heart of Florence\'s historic center. Admire the Palazzo Vecchio, the iconic Neptune Fountain, and the replica of Michelangelo\'s David. Enjoy outdoor cafes, street performers, and the vibrant atmosphere of this lively square.', 'piazza_della_signoria.jpg', '4.5', 'Varies by establishment', '0.00', 'Square'),
(131, 'Florence', 'Galleria dell\'Accademia', 'Experience the Galleria dell\'Accademia, home to Michelangelo\'s famous sculpture, David. Marvel at the impressive statue, as well as other works of art and sculptures displayed in this renowned museum.', 'galleria_dell_accademia.jpg', '4.4', '9:00 AM - 6:00 PM', '18.00', 'Museum'),
(132, 'Florence', 'Boboli Gardens', 'Stroll through the beautiful Boboli Gardens, a vast Renaissance garden located behind the Pitti Palace. Enjoy the tranquil atmosphere, admire the lush greenery, and discover ornate statues, fountains, and picturesque viewpoints.', 'boboli_gardens.jpg', '4.3', '9:00 AM - 7:00 PM', '10.00', 'Park'),
(133, 'Seoul', 'Gyeongbokgung Palace', 'Gyeongbokgung Palace is a grand palace located in Seoul, South Korea. It is the largest and most iconic palace of the Joseon Dynasty. Visitors can explore the palace grounds, admire the traditional architecture, and witness the changing of the guard ceremony.', 'gyeongbokgung_palace.jpg', '4.9', '9:00 AM - 6:00 PM', '10.00', 'Palace'),
(134, 'Seoul', 'Bukchon Hanok Village', 'Bukchon Hanok Village is a traditional Korean village in Seoul, South Korea. It features hundreds of traditional hanok houses, which provide a glimpse into the citys past. Visitors can wander through the narrow streets, visit cultural workshops, and enjoy panoramic views of the city.', 'bukchon_hanok_village.jpg', '4.8', '24 Hours', '0.00', 'Cultural Village'),
(135, 'Seoul', 'N Seoul Tower', 'N Seoul Tower is an iconic landmark and observation tower located on Namsan Mountain in Seoul, South Korea. It offers panoramic views of the city skyline and surrounding mountains. Visitors can take a cable car or hike up to the tower, enjoy restaurants and shops, and leave love locks on the fence.', 'n_seoul_tower.jpg', '4.7', '10:00 AM - 11:00 PM', '12.00', 'Landmark'),
(136, 'Seoul', 'Myeongdong Shopping Street', 'Myeongdong is a vibrant shopping district in Seoul, South Korea. It is known for its trendy fashion boutiques, cosmetic shops, and street food stalls. Visitors can shop for the latest fashion trends, sample delicious Korean street food, and experience the bustling atmosphere.', 'myeongdong_shopping_street.jpg', '4.6', 'Varies', '0.00', 'Shopping Street'),
(137, 'Seoul', 'Lotte World', 'Lotte World is a major entertainment complex in Seoul, South Korea. It features an indoor theme park, outdoor amusement park, shopping malls, and a luxury hotel. Visitors can enjoy thrilling rides, watch parades and performances, shop for souvenirs, and experience Korean culture.', 'lotte_world.jpg', '4.5', '9:30 AM - 10:00 PM', '50.00', 'Theme Park'),
(138, 'Seoul', 'Changdeokgung Palace', 'Changdeokgung Palace is a UNESCO World Heritage site located in Seoul, South Korea. It is known for its beautiful gardens and well-preserved architecture. Visitors can explore the palace complex, stroll through the Secret Garden, and learn about Korea\'s royal history.', 'changdeokgung_palace.jpg', '4.4', '9:00 AM - 6:00 PM', '8.00', 'Palace');
INSERT INTO `Attractions` (`id`, `location`, `name`, `description`, `image`, `rating`, `opening_hours`, `ticket_price`, `attraction_type`) VALUES
(139, 'Vienna', 'Schönbrunn Palace', 'Schönbrunn Palace is a magnificent Baroque palace located in Vienna, Austria. It was the summer residence of the Habsburg monarchs and is now a popular tourist attraction. Visitors can explore the palace, stroll through the gardens, and enjoy stunning views of Vienna.', 'schoenbrunn_palace.jpg', '4.9', '8:30 AM - 5:30 PM', '14.20', 'Palace'),
(140, 'Vienna', 'Belvedere Palace', 'Belvedere Palace is a historic palace complex in Vienna, Austria. It consists of two Baroque palaces, the Upper Belvedere and the Lower Belvedere, set within beautiful gardens. Visitors can admire famous artworks, stroll through the gardens, and enjoy panoramic views of Vienna.', 'belvedere_palace.jpg', '4.8', '9:00 AM - 6:00 PM', '16.00', 'Palace'),
(141, 'Vienna', 'St. Stephen\'s Cathedral', 'St. Stephen\'s Cathedral is a stunning Gothic cathedral located in the heart of Vienna, Austria. It is one of the city\'s most iconic landmarks. Visitors can admire the cathedral\'s intricate architecture, climb the tower for panoramic views, and visit the catacombs.', 'st_stephens_cathedral.jpg', '4.7', '6:00 AM - 10:00 PM', '0.00', 'Cathedral'),
(142, 'Vienna', 'Hofburg Palace', 'Hofburg Palace is a grand imperial palace complex in Vienna, Austria. It has served as the residence of the Habsburg dynasty and now houses several museums and the offices of the President of Austria. Visitors can explore the palace, visit museums, and see the famous Spanish Riding School.', 'hofburg_palace.jpg', '4.6', '9:00 AM - 5:30 PM', '12.00', 'Palace'),
(143, 'Vienna', 'Vienna State Opera', 'Vienna State Opera is an iconic opera house in Vienna, Austria. It is renowned for its world-class opera and ballet performances. Visitors can attend opera or ballet shows, take a guided tour of the opera house, and experience the elegance of Viennese cultural heritage.', 'vienna_state_opera.jpg', '4.5', 'Varies', '0.00', 'Opera House'),
(144, 'Vienna', 'Prater Park', 'Prater Park is a large public park in Vienna, Austria, known for its iconic Giant Ferris Wheel. It offers various attractions, including amusement rides, restaurants, and green spaces. Visitors can ride the Ferris Wheel, enjoy thrilling rides, and relax in the park.', 'prater_park.jpg', '4.4', 'Varies', '0.00', 'Park'),
(145, 'San Francisco', 'Golden Gate Bridge', 'The Golden Gate Bridge is an iconic suspension bridge in San Francisco, United States. It spans the Golden Gate Strait, connecting the city to Marin County. Visitors can walk or cycle across the bridge, take panoramic photos, and enjoy breathtaking views of the city and the Pacific Ocean.', 'golden_gate_bridge.jpg', '4.9', '24 Hours', '0.00', 'Bridge'),
(146, 'San Francisco', 'Alcatraz Island', 'Alcatraz Island is a famous former federal prison located in San Francisco Bay, United States. It housed notorious criminals, such as Al Capone and \"Machine Gun\" Kelly. Visitors can take a ferry to the island, explore the prison, and learn about its intriguing history.', 'alcatraz_island.jpg', '4.8', '9:00 AM - 6:30 PM', '39.90', 'Island'),
(147, 'San Francisco', 'Fisherman\'s Wharf', 'Fisherman\'s Wharf is a bustling waterfront district in San Francisco, United States. It offers a variety of attractions, including seafood restaurants, souvenir shops, and entertainment venues. Visitors can taste fresh seafood, watch street performers, and take a boat tour.', 'fishermans_wharf.jpg', '4.7', 'Varies', '0.00', 'Waterfront'),
(148, 'San Francisco', 'Golden Gate Park', 'Golden Gate Park is a large urban park in San Francisco, United States. It features gardens, museums, lakes, and recreational facilities. Visitors can explore the park on foot or by bike, visit museums, enjoy picnics, and relax amidst nature.', 'golden_gate_park.jpg', '4.6', '5:00 AM - Midnight', '0.00', 'Park'),
(149, 'San Francisco', 'Lombard Street', 'Lombard Street is a famous crooked street in San Francisco, United States. It is known for its steep, winding section with eight hairpin turns. Visitors can drive or walk down the street, admire the picturesque houses, and capture memorable photos.', 'lombard_street.jpg', '4.5', '24 Hours', '0.00', 'Landmark'),
(150, 'San Francisco', 'Exploratorium', 'The Exploratorium is an interactive science museum in San Francisco, United States. It offers hands-on exhibits, educational programs, and learning experiences for all ages. Visitors can engage in various scientific experiments, explore exhibits, and discover the wonders of science.', 'exploratorium.jpg', '4.4', '10:00 AM - 5:00 PM', '29.95', 'Museum'),
(151, 'Buenos Aires', 'La Recoleta Cemetery', 'La Recoleta Cemetery is a famous cemetery in Buenos Aires, Argentina. It is the final resting place of many notable figures, including Eva Perón. Visitors can explore the cemetery, admire the elaborate mausoleums, and learn about Argentine history.', 'recoleta_cemetery.jpg', '4.9', '7:00 AM - 5:30 PM', '0.00', 'Cemetery'),
(152, 'Buenos Aires', 'Teatro Colón', 'Teatro Colón is a renowned opera house in Buenos Aires, Argentina. It is known for its exquisite architecture and world-class performances. Visitors can attend opera or ballet shows, take a guided tour of the theater, and appreciate its grandeur.', 'teatro_colon.jpg', '4.8', 'Varies', '0.00', 'Opera House'),
(153, 'Buenos Aires', 'Casa Rosada', 'Casa Rosada is the presidential palace in Buenos Aires, Argentina. It is a symbol of Argentine politics and history. Visitors can take guided tours of the palace, learn about its historical significance, and see the iconic balcony where Eva Perón addressed the public.', 'casa_rosada.jpg', '4.7', '10:00 AM - 6:00 PM', '0.00', 'Landmark'),
(154, 'Buenos Aires', 'San Telmo Market', 'San Telmo Market is a vibrant street market in Buenos Aires, Argentina. It offers a wide range of antiques, artwork, handicrafts, and street performances. Visitors can explore the market, shop for unique souvenirs, and experience the lively atmosphere of the neighborhood.', 'san_telmo_market.jpg', '4.6', 'Varies', '0.00', 'Market'),
(155, 'Buenos Aires', 'Puerto Madero', 'Puerto Madero is a modern waterfront district in Buenos Aires, Argentina. It features contemporary architecture, upscale restaurants, and waterfront promenades. Visitors can dine at trendy restaurants, stroll along the docks, and enjoy panoramic views of the city.', 'puerto_madero.jpg', '4.5', 'Varies', '0.00', 'Waterfront'),
(156, 'Buenos Aires', 'Museo Nacional de Bellas Artes', 'Museo Nacional de Bellas Artes is a prestigious art museum in Buenos Aires, Argentina. It houses a vast collection of Argentine and international artworks. Visitors can admire paintings, sculptures, and exhibitions showcasing various artistic styles and periods.', 'museo_bellas_artes.jpg', '4.4', '12:30 PM - 7:30 PM', '0.00', 'Museum'),
(157, 'Singapore', 'Gardens by the Bay', 'Gardens by the Bay is a stunning nature park in Singapore. It features futuristic Supertrees, themed gardens, and conservatories. Visitors can explore the gardens, walk along elevated walkways, and witness the mesmerizing light and sound show in the evening.', 'gardens_by_the_bay.jpg', '4.9', '5:00 AM - 2:00 AM', '0.00', 'Park'),
(158, 'Singapore', 'Marina Bay Sands', 'Marina Bay Sands is an iconic integrated resort in Singapore. It consists of a luxury hotel, a casino, shopping malls, and a rooftop infinity pool. Visitors can enjoy panoramic views from the observation deck, shop at high-end boutiques, and experience world-class entertainment.', 'marina_bay_sands.jpg', '4.8', 'Varies', '0.00', 'Landmark'),
(159, 'Singapore', 'Sentosa Island', 'Sentosa Island is a popular resort island in Singapore. It offers a wide range of attractions, including Universal Studios Singapore, S.E.A. Aquarium, and Adventure Cove Waterpark. Visitors can enjoy thrilling rides, relax on beautiful beaches, and indulge in various entertainment options.', 'sentosa_island.jpg', '4.7', 'Varies', '0.00', 'Island'),
(160, 'Singapore', 'Singapore Botanic Gardens', 'Singapore Botanic Gardens is a UNESCO World Heritage Site and a botanical garden in Singapore. It is home to a diverse collection of plants, including the famous orchids. Visitors can explore the gardens, have a picnic, and enjoy nature walks.', 'singapore_botanic_gardens.jpg', '4.6', '5:00 AM - 12:00 AM', '0.00', 'Garden'),
(161, 'Singapore', 'Merlion Park', 'Merlion Park is a popular tourist attraction in Singapore. It features a statue of a mythical creature, the Merlion, spouting water. Visitors can take photos with the iconic statue, enjoy the waterfront views, and learn about Singapore\'s folklore.', 'merlion_park.jpg', '4.5', '24 Hours', '0.00', 'Landmark'),
(162, 'Singapore', 'Chinatown', 'Chinatown is a vibrant ethnic enclave in Singapore. It offers a blend of Chinese heritage, traditional architecture, and culinary delights. Visitors can explore the colorful streets, visit temples, and indulge in delicious street food and shopping.', 'chinatown_singapore.jpg', '4.4', 'Varies', '0.00', 'Neighborhood'),
(163, 'Edinburgh', 'Edinburgh Castle', 'Edinburgh Castle is a historic fortress and a symbol of Scottish heritage. It offers panoramic views of the city and houses various museums and exhibits. Visitors can explore the castle, learn about Scottish history, and witness the firing of the One O\'Clock Gun.', 'edinburgh_castle.jpg', '4.9', '9:30 AM - 6:00 PM', '0.00', 'Castle'),
(164, 'Edinburgh', 'Royal Mile', 'Royal Mile is a historic street in Edinburgh, Scotland. It stretches from Edinburgh Castle to the Palace of Holyroodhouse. Visitors can explore the street, visit historic sites, shop for tartans and souvenirs, and soak in the charming atmosphere of the city.', 'royal_mile.jpg', '4.8', 'Varies', '0.00', 'Street'),
(165, 'Edinburgh', 'Holyrood Palace', 'Holyrood Palace is the official residence of the British monarch in Scotland. It has a rich history and stunning architecture. Visitors can take guided tours of the palace, explore the State Apartments, and stroll through the beautiful gardens.', 'holyrood_palace.jpg', '4.7', '9:30 AM - 6:00 PM', '0.00', 'Palace'),
(166, 'Edinburgh', 'Arthur\'s Seat', 'Arthur\'s Seat is an ancient volcano and a hill in Edinburgh, Scotland. It offers panoramic views of the city and is a popular spot for hiking and outdoor activities. Visitors can hike to the summit, enjoy nature walks, and admire the breathtaking scenery.', 'arthurs_seat.jpg', '4.6', '24 Hours', '0.00', 'Natural Feature'),
(167, 'Edinburgh', 'National Museum of Scotland', 'National Museum of Scotland is a museum in Edinburgh, Scotland. It houses a diverse collection of artifacts, including archaeological treasures and natural history exhibits. Visitors can explore the museum, learn about Scottish culture and history, and engage in interactive displays.', 'national_museum_scotland.jpg', '4.5', '10:00 AM - 5:00 PM', '0.00', 'Museum'),
(168, 'Edinburgh', 'The Scotch Whisky Experience', 'The Scotch Whisky Experience is a whisky museum and tasting attraction in Edinburgh, Scotland. It offers guided tours, whisky tastings, and interactive exhibits. Visitors can learn about the whisky-making process, sample different varieties of Scotch whisky, and appreciate the craftsmanship.', 'scotch_whisky_experience.jpg', '4.4', 'Varies', '0.00', 'Museum'),
(169, 'Zurich', 'Bahnhofstrasse', 'Bahnhofstrasse is a famous shopping street in Zurich, Switzerland. It is known for its luxury boutiques, department stores, and Swiss watch shops. Visitors can indulge in shopping, admire the elegant architecture, and enjoy the vibrant atmosphere of the street.', 'bahnhofstrasse.jpg', '4.9', 'Varies', '0.00', 'Street'),
(170, 'Zurich', 'Lake Zurich', 'Lake Zurich is a scenic lake in Zurich, Switzerland. It offers opportunities for swimming, boating, and lakeside walks. Visitors can take a boat cruise, relax on the lakefront promenade, and enjoy stunning views of the surrounding mountains.', 'lake_zurich.jpg', '4.8', '24 Hours', '0.00', 'Lake'),
(171, 'Zurich', 'Old Town (Altstadt)', 'Old Town, also known as Altstadt, is the historic center of Zurich, Switzerland. It features narrow streets, medieval buildings, and charming squares. Visitors can explore the Old Town, visit historic churches, and soak in the rich cultural heritage of the city.', 'old_town_zurich.jpg', '4.7', 'Varies', '0.00', 'Neighborhood'),
(172, 'Zurich', 'Zurich Zoo', 'Zurich Zoo is a popular attraction in Zurich, Switzerland. It is home to a wide variety of animals, including exotic species. Visitors can observe animals in naturalistic habitats, attend animal presentations, and learn about wildlife conservation.', 'zurich_zoo.jpg', '4.6', '9:00 AM - 6:00 PM', '0.00', 'Zoo'),
(173, 'Zurich', 'Swiss National Museum', 'Swiss National Museum is a museum in Zurich, Switzerland. It showcases Swiss cultural history and houses a vast collection of artifacts. Visitors can explore the museum, learn about Swiss traditions, and see exhibitions on various aspects of Swiss culture.', 'swiss_national_museum.jpg', '4.5', '10:00 AM - 5:00 PM', '0.00', 'Museum'),
(174, 'Zurich', 'Uetliberg', 'Uetliberg is a mountain and a popular recreational area near Zurich, Switzerland. It offers hiking trails, panoramic views, and a lookout tower. Visitors can hike to the summit, enjoy outdoor activities, and savor breathtaking views of Zurich and the surrounding landscapes.', 'uetliberg.jpg', '4.4', '24 Hours', '0.00', 'Mountain'),
(175, 'Stockholm', 'Vasa Museum', 'Vasa Museum is a maritime museum in Stockholm, Sweden. It houses the 17th-century warship Vasa, which sank on its maiden voyage and was salvaged centuries later. Visitors can marvel at the well-preserved ship, learn about its history, and explore interactive exhibits.', 'vasa_museum.jpg', '4.9', '10:00 AM - 5:00 PM', '0.00', 'Museum'),
(176, 'Stockholm', 'Gamla Stan', 'Gamla Stan is the historic heart of Stockholm, Sweden. It features colorful buildings, narrow cobblestone streets, and medieval architecture. Visitors can explore the charming streets, visit historic sites, and indulge in Swedish cuisine at cozy restaurants and cafes.', 'gamla_stan.jpg', '4.8', 'Varies', '0.00', 'Neighborhood'),
(177, 'Stockholm', 'Skansen', 'Skansen is an open-air museum and zoo in Stockholm, Sweden. It showcases traditional Swedish buildings, crafts, and cultural events. Visitors can explore the museum, interact with costumed guides, and see animals native to Scandinavia.', 'skansen.jpg', '4.7', '10:00 AM - 10:00 PM', '0.00', 'Museum'),
(178, 'Stockholm', 'Drottningholm Palace', 'Drottningholm Palace is a UNESCO World Heritage Site and a royal palace in Stockholm, Sweden. It is the residence of the Swedish royal family. Visitors can take guided tours of the palace, explore the beautiful gardens, and watch performances at the Drottningholm Theatre.', 'drottningholm_palace.jpg', '4.6', '10:00 AM - 4:00 PM', '0.00', 'Palace'),
(179, 'Stockholm', 'ABBA The Museum', 'ABBA The Museum is a museum in Stockholm, Sweden, dedicated to the pop group ABBA. It offers interactive exhibits, memorabilia, and music experiences. Visitors can learn about the band\'s history, sing karaoke, and immerse themselves in the world of ABBA.', 'abba_the_museum.jpg', '4.5', '10:00 AM - 6:00 PM', '0.00', 'Museum'),
(180, 'Stockholm', 'Royal Palace', 'The Royal Palace is the official residence of the Swedish monarch in Stockholm, Sweden. It is one of the largest palaces in Europe. Visitors can explore the palace, witness the changing of the guard ceremony, and visit the Royal Apartments and the Treasury.', 'royal_palace_stockholm.jpg', '4.4', '10:00 AM - 4:00 PM', '0.00', 'Palace'),
(181, 'Dublin', 'Guinness Storehouse', 'Guinness Storehouse is a popular attraction in Dublin, Ireland. It is a seven-story museum dedicated to the history and brewing process of Guinness beer. Visitors can learn about the iconic Irish beer, enjoy panoramic views of Dublin from the Gravity Bar, and even learn to pour their own pint.', 'guinness_storehouse.jpg', '4.9', '9:30 AM - 7:00 PM', '0.00', 'Brewery'),
(182, 'Dublin', 'Trinity College Library', 'Trinity College Library is the largest library in Ireland and home to the Book of Kells, a famous medieval manuscript. Visitors can admire the historic library, view the illuminated manuscript, and learn about Ireland\'s literary heritage.', 'trinity_college_library.jpg', '4.8', 'Varies', '0.00', 'Library'),
(183, 'Dublin', 'Temple Bar', 'Temple Bar is a vibrant neighborhood in Dublin, Ireland. It is known for its lively pubs, live music, and cultural events. Visitors can explore the cobblestone streets, enjoy traditional Irish music, and experience the lively nightlife of Dublin.', 'temple_bar.jpg', '4.7', 'Varies', '0.00', 'Neighborhood'),
(184, 'Dublin', 'Dublin Castle', 'Dublin Castle is a historic castle complex in Dublin, Ireland. It has served various purposes throughout history and now houses government offices and ceremonial spaces. Visitors can take guided tours, explore the State Apartments, and visit the Chester Beatty Library.', 'dublin_castle.jpg', '4.6', 'Varies', '0.00', 'Castle'),
(185, 'Dublin', 'St. Patrick\'s Cathedral', 'St. Patrick\'s Cathedral is the largest cathedral in Ireland and a popular tourist attraction in Dublin. It has a rich history and stunning architecture. Visitors can attend services, take guided tours, and appreciate the beauty of the cathedral and its surroundings.', 'st_patricks_cathedral.jpg', '4.5', '9:30 AM - 5:00 PM', '0.00', 'Cathedral'),
(186, 'Dublin', 'National Museum of Ireland - Archaeology', 'National Museum of Ireland - Archaeology is a museum in Dublin, Ireland, dedicated to Irish archaeology and history. It houses a vast collection of artifacts, including the Treasury with the famous Tara Brooch. Visitors can explore the museum, learn about ancient Ireland, and see remarkable archaeological finds.', 'national_museum_ireland_archaeology.jpg', '4.4', '10:00 AM - 5:00 PM', '0.00', 'Museum'),
(187, 'Havana', 'Old Havana', 'Old Havana, or Habana Vieja, is the historic center of Havana, Cuba. It is a UNESCO World Heritage Site known for its colonial architecture, vibrant plazas, and vintage cars. Visitors can stroll through the narrow streets, visit historic landmarks, and soak in the lively atmosphere.', 'old_havana.jpg', '4.9', 'Varies', '0.00', 'Neighborhood'),
(188, 'Havana', 'Malecón', 'The Malecón is a famous waterfront promenade in Havana, Cuba. It stretches for several kilometers along the coast and offers stunning views of the sea and the city skyline. Visitors can walk along the Malecón, enjoy the sea breeze, and experience the local culture.', 'malecon.jpg', '4.8', 'Varies', '0.00', 'Promenade'),
(189, 'Havana', 'Museum of the Revolution', 'The Museum of the Revolution is a museum located in the former Presidential Palace in Havana, Cuba. It showcases the history of the Cuban Revolution and houses artifacts, photographs, and exhibits related to the revolutionary period. Visitors can learn about Cuba\'s revolutionary past and explore the museum\'s collections.', 'museum_of_the_revolution.jpg', '4.7', '10:00 AM - 5:00 PM', '0.00', 'Museum'),
(190, 'Havana', 'El Capitolio', 'El Capitolio, or the National Capitol Building, is a prominent landmark in Havana, Cuba. It resembles the Capitol Building in Washington, D.C. and currently houses the Cuban Academy of Sciences. Visitors can admire the impressive architecture, explore the building, and enjoy panoramic views of the city.', 'el_capitolio.jpg', '4.6', '9:00 AM - 5:00 PM', '0.00', 'Landmark'),
(191, 'Havana', 'Morro Castle', 'Morro Castle is a fortress located at the entrance of Havana Bay in Havana, Cuba. It was built in the 16th century to protect the city from pirate attacks. Visitors can explore the fortress, climb to the top for panoramic views, and learn about Havana\'s maritime history.', 'morro_castle.jpg', '4.5', '10:00 AM - 6:00 PM', '0.00', 'Castle'),
(192, 'Havana', 'Fabrica de Arte Cubano', 'Fabrica de Arte Cubano is an art gallery, music venue, and cultural space in Havana, Cuba. It showcases contemporary Cuban art, hosts live performances, and offers a vibrant nightlife experience. Visitors can immerse themselves in Cuba\'s art scene, enjoy live music, and explore the various art exhibitions.', 'fabrica_de_arte_cubano.jpg', '4.4', '8:00 PM - 3:00 AM', '0.00', 'Art Gallery'),
(193, 'Lisbon', 'Belem Tower', 'Belem Tower is a fortified tower located in Belem, a district of Lisbon, Portugal. It served as a defensive structure and a ceremonial gateway to the city. Visitors can explore the tower, enjoy panoramic views of the Tagus River, and learn about Portugal\'s maritime history.', 'belem_tower.jpg', '4.9', '10:00 AM - 6:30 PM', '0.00', 'Landmark'),
(194, 'Lisbon', 'Jerónimos Monastery', 'Jerónimos Monastery is a UNESCO World Heritage Site and a magnificent monastery in Lisbon, Portugal. It is known for its Manueline architecture, intricate stone carvings, and rich history. Visitors can admire the monastery\'s grandeur, explore its cloisters and chapels, and visit the adjacent Maritime Museum.', 'jeronimos_monastery.jpg', '4.8', '10:00 AM - 6:30 PM', '0.00', 'Monastery'),
(195, 'Lisbon', 'Castelo de São Jorge', 'Castelo de São Jorge, or St. George\'s Castle, is a historic castle situated on a hilltop in Lisbon, Portugal. It offers panoramic views of the city and the Tagus River. Visitors can explore the castle grounds, walk along its ancient walls, and learn about Lisbon\'s medieval past.', 'castelo_de_sao_jorge.jpg', '4.7', '9:00 AM - 9:00 PM', '0.00', 'Castle'),
(196, 'Lisbon', 'Rossio Square', 'Rossio Square, officially known as Praça Dom Pedro IV, is a lively square in the heart of Lisbon, Portugal. It is a popular meeting place and a hub of activity. Visitors can relax on the square\'s mosaic-patterned pavement, admire the fountains, and soak in the vibrant atmosphere.', 'rossio_square.jpg', '4.6', 'Open 24 Hours', '0.00', 'Plaza'),
(197, 'Lisbon', 'Lisbon Oceanarium', 'Lisbon Oceanarium is one of the largest aquariums in Europe and a major tourist attraction in Lisbon, Portugal. It houses a diverse range of marine life, including sharks, rays, and penguins. Visitors can explore the different habitats, watch feeding sessions, and learn about marine conservation.', 'lisbon_oceanarium.jpg', '4.5', '10:00 AM - 6:00 PM', '0.00', 'Aquarium'),
(198, 'Lisbon', 'Elevador de Santa Justa', 'Elevador de Santa Justa, or Santa Justa Lift, is an iconic elevator and viewpoint in Lisbon, Portugal. It connects the lower streets of Baixa with the higher neighborhood of Carmo. Visitors can ride the elevator, enjoy panoramic views from the top, and admire the ironwork architecture.', 'elevador_de_santa_justa.jpg', '4.4', '7:00 AM - 11:00 PM', '0.00', 'Landmark'),
(199, 'Reykjavik', 'Hallgrímskirkja', 'Hallgrímskirkja is a striking Lutheran church and an iconic landmark in Reykjavik, Iceland. It is the largest church in Iceland and offers panoramic views of the city from its observation deck. Visitors can admire the church\'s unique architecture, attend concerts, and enjoy the serene surroundings.', 'hallgrimskirkja.jpg', '4.9', '9:00 AM - 5:00 PM', '0.00', 'Church'),
(200, 'Reykjavik', 'Blue Lagoon', 'The Blue Lagoon is a geothermal spa located in a lava field in Grindavík, Iceland. It is renowned for its milky blue waters, rich mineral content, and rejuvenating properties. Visitors can relax in the warm waters, indulge in spa treatments, and experience the unique geothermal landscape.', 'blue_lagoon.jpg', '4.8', '8:00 AM - 9:00 PM', '0.00', 'Spa'),
(201, 'Reykjavik', 'Perlan', 'Perlan is a glass dome-shaped landmark building in Reykjavik, Iceland. It houses a museum, an observation deck, and a revolving restaurant. Visitors can learn about Iceland\'s natural wonders, enjoy panoramic views of the city and the surrounding landscape, and savor delicious cuisine.', 'perlan.jpg', '4.7', '9:00 AM - 7:00 PM', '0.00', 'Landmark'),
(202, 'Reykjavik', 'Golden Circle', 'The Golden Circle is a popular tourist route in Iceland that covers several natural and historical attractions. It includes landmarks like Thingvellir National Park, Geysir Geothermal Area, and Gullfoss Waterfall. Visitors can explore stunning landscapes, witness geothermal activity, and learn about Iceland\'s history.', 'golden_circle.jpg', '4.6', 'Varies', '0.00', 'Scenic Route'),
(203, 'Reykjavik', 'Harpa Concert Hall', 'Harpa Concert Hall is a modern and architecturally striking music and conference hall in Reykjavik, Iceland. It is known for its glass facade and hosts various concerts, performances, and events. Visitors can attend concerts, explore the building\'s unique design, and enjoy the vibrant cultural scene.', 'harpa_concert_hall.jpg', '4.5', 'Varies', '0.00', 'Concert Hall'),
(204, 'Reykjavik', 'Reykjavik Art Museum', 'Reykjavik Art Museum is a leading art institution in Reykjavik, Iceland, with multiple locations across the city. It showcases contemporary and modern art from Icelandic and international artists. Visitors can admire diverse art exhibitions, attend cultural events, and immerse themselves in the art world.', 'reykjavik_art_museum.jpg', '4.4', '10:00 AM - 5:00 PM', '0.00', 'Art Museum'),
(205, 'Helsinki', 'Suomenlinna Fortress', 'Explore the Suomenlinna Fortress, a UNESCO World Heritage Site. Take a ferry to the island and discover the historic fortress complex, walk along the fortification walls, visit museums, and enjoy panoramic views of the Baltic Sea.', 'suomenlinna_fortress.jpg', '4.7', '10:00 AM - 6:00 PM', '12.00', 'Historical Site'),
(206, 'Helsinki', 'Helsinki Cathedral', 'Visit the Helsinki Cathedral, an iconic landmark in the city. Admire its neoclassical architecture, climb the steps for a panoramic view of the city, and explore the interior with its beautiful altarpieces and stunning decorations.', 'helsinki_cathedral.jpg', '4.6', '9:00 AM - 6:00 PM', '0.00', 'Religious Site'),
(207, 'Helsinki', 'Temppeliaukio Church', 'Experience the Temppeliaukio Church, also known as the Rock Church. Marvel at its unique architecture carved into solid rock, admire the natural light pouring in through the skylight, and enjoy the acoustics during occasional concerts.', 'temppeliaukio_church.jpg', '4.5', '10:00 AM - 8:00 PM', '5.00', 'Religious Site'),
(208, 'Helsinki', 'Market Square', 'Visit the Market Square, a bustling marketplace in the heart of Helsinki. Explore the stalls offering local produce, Finnish crafts, and souvenirs. Enjoy fresh seafood, traditional Finnish snacks, and soak in the lively atmosphere.', 'market_square.jpg', '4.4', 'Varies by stall', '0.00', 'Marketplace'),
(209, 'Helsinki', 'Seurasaari Open-Air Museum', 'Discover the Seurasaari Open-Air Museum, an island showcasing traditional Finnish architecture. Take a leisurely walk through the outdoor museum, explore historic buildings, and learn about Finnish cultural heritage.', 'seurasaari_museum.jpg', '4.3', '10:00 AM - 6:00 PM', '10.00', 'Museum'),
(210, 'Helsinki', 'Sibelius Monument', 'Admire the Sibelius Monument, dedicated to the Finnish composer Jean Sibelius. Marvel at the unique sculpture resembling organ pipes, located in a beautiful park. Enjoy the peaceful surroundings and appreciate the artistic tribute to Finland\'s renowned composer.', 'sibelius_monument.jpg', '4.2', 'Open 24 hours', '0.00', 'Landmark'),
(211, 'Mexico City', 'Palacio de Bellas Artes', 'Visit the Palacio de Bellas Artes, a stunning palace and cultural center. Admire its magnificent architecture, explore the art exhibits and performances inside, and enjoy the breathtaking murals by renowned Mexican artists.', 'palacio_bellas_artes.jpg', '4.8', '10:00 AM - 6:00 PM', '10.00', 'Cultural Center'),
(212, 'Mexico City', 'Zócalo', 'Explore the Zócalo, the main square of Mexico City. Discover historic buildings such as the Metropolitan Cathedral and National Palace, visit museums, enjoy cultural events, and experience the vibrant atmosphere of this iconic public space.', 'zocalo.jpg', '4.7', 'Open 24 hours', '0.00', 'Plaza'),
(213, 'Mexico City', 'Chapultepec Park', 'Escape to Chapultepec Park, one of the largest city parks in the world. Take a stroll through lush greenery, visit the Chapultepec Castle, explore the museums within the park, and enjoy recreational activities such as boating and picnicking.', 'chapultepec_park.jpg', '4.6', '5:00 AM - 10:00 PM', '0.00', 'Park'),
(214, 'Mexico City', 'Frida Kahlo Museum', 'Immerse yourself in the art and life of Frida Kahlo at the Frida Kahlo Museum, also known as Casa Azul. Explore the museum dedicated to the renowned Mexican artist, see her personal belongings, and admire her iconic artwork.', 'frida_kahlo_museum.jpg', '4.5', '10:00 AM - 5:30 PM', '15.00', 'Museum'),
(215, 'Mexico City', 'Xochimilco Floating Gardens', 'Experience the colorful Xochimilco Floating Gardens, a UNESCO World Heritage Site. Take a boat ride along the canals, enjoy traditional Mexican music, try local cuisine, and soak in the vibrant atmosphere of this unique cultural destination.', 'xochimilco_gardens.jpg', '4.4', '9:00 AM - 6:00 PM', '20.00', 'Park'),
(216, 'Mexico City', 'Teotihuacan Pyramids', 'Explore the ancient Teotihuacan Pyramids, one of Mexico\'s most significant archaeological sites. Climb the Pyramid of the Sun and Pyramid of the Moon, marvel at the Avenue of the Dead, and learn about the rich history of this pre-Columbian city.', 'teotihuacan_pyramids.jpg', '4.3', '9:00 AM - 5:00 PM', '25.00', 'Historical Site'),
(217, 'Beijing', 'Great Wall of China', 'Visit the Great Wall of China, one of the most iconic landmarks in the world. Explore this ancient architectural marvel, hike along its scenic sections, and take in breathtaking views of the surrounding landscape.', 'great_wall.jpg', '4.9', '7:00 AM - 5:00 PM', '20.00', 'Historical Site'),
(218, 'Beijing', 'Forbidden City', 'Discover the Forbidden City, a grand imperial palace complex that served as the home of Chinese emperors for centuries. Marvel at its stunning architecture, explore its vast courtyards and halls, and learn about China\'s rich history.', 'forbidden_city.jpg', '4.8', '8:30 AM - 5:00 PM', '15.00', 'Historical Site'),
(219, 'Beijing', 'Temple of Heaven', 'Visit the Temple of Heaven, a magnificent religious complex and UNESCO World Heritage Site. Experience its serene atmosphere, admire its intricate architecture, and witness locals practicing traditional activities such as tai chi and kung fu.', 'temple_of_heaven.jpg', '4.7', '8:00 AM - 5:30 PM', '10.00', 'Religious Site'),
(220, 'Beijing', 'Summer Palace', 'Escape to the Summer Palace, a stunning royal retreat and UNESCO World Heritage Site. Explore its beautiful gardens, stroll along the picturesque Kunming Lake, and admire the architecture of its pavilions, temples, and palaces.', 'summer_palace.jpg', '4.6', '7:00 AM - 7:00 PM', '12.00', 'Historical Site'),
(221, 'Beijing', 'Tiananmen Square', 'Visit Tiananmen Square, one of the world\'s largest public squares. Marvel at the Monument to the People\'s Heroes, explore the National Museum of China, and witness the grandeur of the Gate of Heavenly Peace.', 'tiananmen_square.jpg', '4.5', 'Open 24 hours', '0.00', 'Plaza'),
(222, 'Beijing', 'Beijing Olympic Park', 'Explore Beijing Olympic Park, the site of the 2008 Summer Olympics. Visit iconic venues such as the Bird\'s Nest Stadium and Water Cube, enjoy recreational activities in the park, and relive the spirit of the Olympic Games.', 'beijing_olympic_park.jpg', '4.4', '8:00 AM - 6:00 PM', '8.00', 'Park'),
(223, 'Copenhagen', 'Nyhavn', 'Explore Nyhavn, a picturesque waterfront district in Copenhagen. Enjoy the colorful buildings, charming canals, and vibrant atmosphere. Indulge in delicious Danish cuisine, visit the local bars and cafes, or take a boat tour along the canals.', 'nyhavn.jpg', '4.8', 'Open 24 hours', '0.00', 'Landmark'),
(224, 'Copenhagen', 'Tivoli Gardens', 'Visit Tivoli Gardens, one of the oldest amusement parks in the world. Experience thrilling rides, enjoy live performances, stroll through beautifully landscaped gardens, and savor delicious food in this magical entertainment destination.', 'tivoli_gardens.jpg', '4.7', '11:00 AM - 11:00 PM', '25.00', 'Amusement Park'),
(225, 'Copenhagen', 'The Little Mermaid', 'Admire The Little Mermaid statue, an iconic symbol of Copenhagen. Located at the Langelinie promenade, this bronze sculpture is inspired by Hans Christian Andersen\'s fairytale. Take a leisurely walk along the waterfront and capture memorable photos.', 'little_mermaid.jpg', '4.6', 'Open 24 hours', '0.00', 'Landmark'),
(226, 'Copenhagen', 'Christiansborg Palace', 'Explore Christiansborg Palace, the seat of the Danish Parliament and other royal institutions. Marvel at the splendid architecture, visit the royal reception rooms, and learn about Denmark\'s history and culture through exhibitions and guided tours.', 'christiansborg_palace.jpg', '4.5', '10:00 AM - 5:00 PM', '12.00', 'Historical Site'),
(227, 'Copenhagen', 'Rosenborg Castle', 'Step into the elegant Rosenborg Castle, a well-preserved Renaissance castle in Copenhagen. Admire the opulent interiors, royal artifacts, and the beautiful King\'s Garden surrounding the castle. Don\'t miss the chance to see the Danish Crown Jewels.', 'rosenborg_castle.jpg', '4.4', '10:00 AM - 4:00 PM', '14.00', 'Historical Site'),
(228, 'Copenhagen', 'National Museum of Denmark', 'Immerse yourself in Danish history and culture at the National Museum of Denmark. Explore its extensive collection of artifacts, archaeological finds, and art objects that span thousands of years, offering insights into Danish heritage.', 'national_museum.jpg', '4.3', '10:00 AM - 5:00 PM', '10.00', 'Museum'),
(229, 'Venice', 'St. Mark\'s Square', 'Visit St. Mark\'s Square, the heart of Venice. Admire the stunning St. Mark\'s Basilica, the Doge\'s Palace, and the iconic Campanile. Enjoy the lively atmosphere, listen to live music, and sip coffee at the historic cafes.', 'st_marks_square.jpg', '4.8', 'Open 24 hours', '0.00', 'Landmark'),
(230, 'Venice', 'Rialto Bridge', 'Cross the famous Rialto Bridge, the oldest and most iconic bridge in Venice. Enjoy panoramic views of the Grand Canal, explore the bustling Rialto Market, and shop for local products, including fresh produce, seafood, and souvenirs.', 'rialto_bridge.jpg', '4.7', 'Open 24 hours', '0.00', 'Landmark'),
(231, 'Venice', 'Doge\'s Palace', 'Step into the magnificent Doge\'s Palace, a symbol of Venice\'s rich history and power. Explore its lavish rooms, admire masterpieces by renowned artists, and walk across the Bridge of Sighs, offering breathtaking views of the city.', 'doges_palace.jpg', '4.6', '9:00 AM - 7:00 PM', '20.00', 'Historical Site'),
(232, 'Venice', 'Gondola Ride', 'Experience a traditional gondola ride through the enchanting canals of Venice. Enjoy the romantic ambiance, pass under picturesque bridges, and discover hidden corners of the city. Let the gondolier serenade you as you glide along the waterways.', 'gondola_ride.jpg', '4.5', '9:00 AM - 6:00 PM', '80.00', 'Activity'),
(233, 'Venice', 'Piazza San Marco', 'Discover the grandeur of Piazza San Marco, surrounded by architectural marvels and historical landmarks. Marvel at the beauty of St. Mark\'s Basilica, visit the Correr Museum, and relax at the outdoor cafes while enjoying the lively atmosphere.', 'piazza_san_marco.jpg', '4.4', 'Open 24 hours', '0.00', 'Landmark'),
(234, 'Venice', 'Murano Island', 'Take a trip to Murano Island, famous for its centuries-old glassmaking tradition. Visit glass factories, witness master craftsmen in action, and explore the colorful streets. Don\'t miss the opportunity to purchase exquisite Murano glass souvenirs.', 'murano_island.jpg', '4.3', '9:00 AM - 5:00 PM', '12.00', 'Island'),
(235, 'Melbourne', 'Federation Square', 'Explore Federation Square, a vibrant cultural hub in the heart of Melbourne. Enjoy live performances, visit art galleries, dine at diverse restaurants, and attend various events and festivals.', 'federation_square.jpg', '4.7', 'Open 24 hours', '0.00', 'Landmark'),
(236, 'Melbourne', 'Queen Victoria Market', 'Experience the bustling atmosphere of Queen Victoria Market, one of the largest open-air markets in the Southern Hemisphere. Browse through a wide range of fresh produce, clothing, souvenirs, and local delicacies.', 'queen_victoria_market.jpg', '4.6', 'Tue: 6:00 AM - 2:00 PM, Thu: 6:00 AM - 2:00 PM, Fri: 6:00 AM - 5:00 PM, Sat: 6:00 AM - 3:00 PM, Sun: 9:00 AM - 4:00 PM', '0.00', 'Market'),
(237, 'Melbourne', 'Royal Botanic Gardens', 'Escape to the serene Royal Botanic Gardens and immerse yourself in nature. Stroll through beautifully landscaped gardens, admire diverse plant species, and relax in peaceful surroundings.', 'royal_botanic_gardens.jpg', '4.8', '7:30 AM - 6:00 PM', '0.00', 'Park'),
(238, 'Melbourne', 'National Gallery of Victoria', 'Visit the National Gallery of Victoria and explore its extensive collection of artworks, ranging from contemporary pieces to ancient artifacts. Marvel at masterpieces by renowned artists and discover exhibitions from around the world.', 'national_gallery_of_victoria.jpg', '4.5', 'Wed - Mon: 10:00 AM - 5:00 PM', '0.00', 'Art Gallery'),
(239, 'Melbourne', 'Melbourne Cricket Ground', 'Discover the iconic Melbourne Cricket Ground (MCG), known as \"The G\". Take a guided tour to learn about its rich sporting history, visit the Australian Sports Museum, and watch thrilling cricket or Australian Rules Football matches.', 'melbourne_cricket_ground.jpg', '4.7', 'Tour: 10:00 AM - 3:00 PM, Match Days: Varies', '25.00', 'Sports Venue'),
(240, 'Melbourne', 'Great Ocean Road', 'Embark on a scenic road trip along the Great Ocean Road, one of the world\'s most spectacular coastal drives. Enjoy breathtaking ocean views, visit iconic landmarks like the Twelve Apostles, and explore charming seaside towns.', 'great_ocean_road.jpg', '4.9', 'Open 24 hours', '0.00', 'Scenic Drive'),
(241, 'Amman', 'Amman Citadel', 'Explore the ancient Amman Citadel, perched on the highest hill in Amman. Discover archaeological ruins, including the Temple of Hercules and Umayyad Palace, and enjoy panoramic views of the city.', 'amman_citadel.jpg', '4.6', '8:00 AM - 6:00 PM', '3.00', 'Historical Site'),
(242, 'Amman', 'Roman Theater', 'Visit the Roman Theater, an impressive amphitheater dating back to the 2nd century. Marvel at its well-preserved architecture, attend live performances, and learn about Jordan\'s rich history.', 'roman_theater.jpg', '4.7', '8:00 AM - 6:00 PM', '2.00', 'Historical Site'),
(243, 'Amman', 'Rainbow Street', 'Stroll along Rainbow Street, a vibrant and trendy street in Amman. Discover boutique shops, art galleries, cozy cafes, and lively restaurants offering a variety of cuisines.', 'rainbow_street.jpg', '4.5', 'Varies by establishment', '0.00', 'Shopping and Dining'),
(244, 'Amman', 'Jordan Museum', 'Visit the Jordan Museum and explore its fascinating exhibits showcasing Jordan\'s history, culture, and heritage. Discover artifacts, ancient artifacts, and multimedia displays that offer insights into the country\'s past.', 'jordan_museum.jpg', '4.4', 'Tue - Sun: 10:00 AM - 5:00 PM', '5.00', 'Museum'),
(245, 'Amman', 'Jabal Al-Qalaa Park', 'Relax in Jabal Al-Qalaa Park, a beautiful hillside park with lush greenery and panoramic views of Amman. Enjoy a picnic, go for a leisurely walk, and admire the stunning vistas.', 'jabal_al_qalaa_park.jpg', '4.7', 'Open 24 hours', '0.00', 'Park'),
(246, 'Amman', 'Souk Jara', 'Experience the vibrant atmosphere of Souk Jara, an outdoor market held in Amman\'s old town during the summer months. Browse through stalls selling handicrafts, jewelry, clothing, and sample delicious street food.', 'souk_jara.jpg', '4.5', 'Fri: 10:00 AM - 10:00 PM, Sat: 10:00 AM - 11:00 PM', '0.00', 'Market'),
(247, 'Nairobi', 'Nairobi National Park', 'Explore Nairobi National Park, a unique wildlife reserve located just outside the city. Experience a safari adventure and spot a wide range of animals, including lions, giraffes, zebras, and rhinos.', 'nairobi_national_park.jpg', '4.7', '6:00 AM - 6:00 PM', '30.00', 'Safari and Wildlife'),
(248, 'Nairobi', 'David Sheldrick Wildlife Trust', 'Visit the David Sheldrick Wildlife Trust, a sanctuary for orphaned elephants and rhinos. Learn about conservation efforts, witness the feeding sessions, and even adopt an elephant.', 'david_sheldrick_wildlife_trust.jpg', '4.8', '11:00 AM - 12:00 PM', '10.00', 'Animal Sanctuary'),
(249, 'Nairobi', 'Giraffe Centre', 'Interact with giraffes up close at the Giraffe Centre. Feed and observe these graceful creatures from an elevated platform, and learn about giraffe conservation efforts.', 'giraffe_centre.jpg', '4.6', '9:00 AM - 5:00 PM', '15.00', 'Animal Encounter'),
(250, 'Nairobi', 'Maasai Market', 'Immerse yourself in the vibrant atmosphere of the Maasai Market, a bustling open-air market where you can shop for traditional crafts, artifacts, jewelry, and clothing from various Kenyan tribes.', 'maasai_market.jpg', '4.4', '10:00 AM - 6:00 PM', '0.00', 'Market'),
(251, 'Nairobi', 'Nairobi National Museum', 'Visit the Nairobi National Museum and explore its extensive collection of art, artifacts, and exhibits showcasing Kenya\'s rich cultural and natural heritage. Learn about the country\'s history, archaeology, and paleontology.', 'nairobi_national_museum.jpg', '4.5', 'Tue - Sun: 9:30 AM - 5:30 PM', '5.00', 'Museum'),
(252, 'Nairobi', 'Karen Blixen Museum', 'Step into the world of Karen Blixen, the author of \"Out of Africa,\" at the Karen Blixen Museum. Explore the historic farmhouse, learn about Blixen\'s life in Kenya, and stroll through the beautiful gardens.', 'karen_blixen_museum.jpg', '4.6', '9:30 AM - 6:00 PM', '12.00', 'Historical Site'),
(253, 'Budapest', 'Buda Castle', 'Explore the historic Buda Castle, a UNESCO World Heritage Site and iconic landmark in Budapest. Admire the stunning architecture, visit the museums within the complex, and enjoy panoramic views of the city.', 'buda_castle.jpg', '4.7', '9:00 AM - 6:00 PM', '10.00', 'Historical Site'),
(254, 'Budapest', 'Chain Bridge', 'Cross the beautiful Chain Bridge, the oldest and most famous bridge in Budapest, connecting Buda and Pest. Enjoy a leisurely walk across the bridge while taking in breathtaking views of the Danube River and the city skyline.', 'chain_bridge.jpg', '4.8', 'Open 24 hours', '0.00', 'Landmark'),
(255, 'Budapest', 'Széchenyi Thermal Bath', 'Indulge in relaxation at the Széchenyi Thermal Bath, one of the largest thermal bath complexes in Europe. Enjoy the healing thermal waters, soak in outdoor and indoor pools, and experience the traditional Hungarian spa culture.', 'szechenyi_thermal_bath.jpg', '4.6', '6:00 AM - 10:00 PM', '20.00', 'Spa and Wellness'),
(256, 'Budapest', 'Fisherman\'s Bastion', 'Visit the enchanting Fisherman\'s Bastion, a fairy tale-like terrace offering panoramic views of Budapest. Admire the neo-Gothic architecture, explore the seven towers, and capture memorable photos of the cityscape.', 'fishermans_bastion.jpg', '4.5', 'Open 24 hours', '0.00', 'Landmark'),
(257, 'Budapest', 'Hungarian Parliament Building', 'Marvel at the magnificent Hungarian Parliament Building, an architectural masterpiece along the Danube River. Take a guided tour to admire the interior adorned with stunning frescoes, statues, and the Hungarian Crown Jewels.', 'hungarian_parliament_building.jpg', '4.7', '8:00 AM - 6:00 PM', '12.00', 'Landmark'),
(258, 'Budapest', 'Heroes\' Square', 'Visit Heroes\' Square, a grand square in Budapest featuring statues of important historical figures and the Millennium Memorial. Explore the Museum of Fine Arts and the Hall of Art located on either side of the square.', 'heroes_square.jpg', '4.4', 'Open 24 hours', '0.00', 'Landmark'),
(259, 'Marrakech', 'Jemaa el-Fnaa', 'Experience the vibrant atmosphere of Jemaa el-Fnaa, the main square and marketplace in Marrakech. Explore the bustling souks, enjoy live music and entertainment, and savor traditional Moroccan street food.', 'jemaa_el_fnaa.jpg', '4.8', 'Open 24 hours', '0.00', 'Marketplace'),
(260, 'Marrakech', 'Bahia Palace', 'Step into the opulent world of Bahia Palace, a stunning 19th-century palace featuring beautiful gardens and intricate Moroccan architecture. Admire the colorful tilework, ornate ceilings, and tranquil courtyards.', 'bahia_palace.jpg', '4.7', '9:00 AM - 5:00 PM', '10.00', 'Historical Site'),
(261, 'Marrakech', 'Koutoubia Mosque', 'Visit the iconic Koutoubia Mosque, the largest mosque in Marrakech with its impressive minaret towering over the city. Explore the surrounding gardens and enjoy the peaceful ambiance of this important religious site.', 'koutoubia_mosque.jpg', '4.6', 'Open 24 hours', '0.00', 'Religious Site'),
(262, 'Marrakech', 'Majorelle Garden', 'Escape to the serene oasis of Majorelle Garden, a lush botanical garden filled with exotic plants, vibrant blue buildings, and a museum dedicated to the work of French painter Jacques Majorelle.', 'majorelle_garden.jpg', '4.5', '8:00 AM - 6:00 PM', '20.00', 'Garden'),
(263, 'Marrakech', 'Medina of Marrakech', 'Get lost in the narrow winding streets of the Medina of Marrakech, a UNESCO World Heritage site. Discover ancient palaces, traditional riads, and bustling markets selling handicrafts, spices, and more.', 'medina_of_marrakech.jpg', '4.7', 'Open 24 hours', '0.00', 'Historical Site'),
(264, 'Marrakech', 'Atlas Mountains', 'Embark on a day trip to the stunning Atlas Mountains, located just outside Marrakech. Enjoy breathtaking scenery, hike through picturesque valleys, and experience Berber culture in the mountain villages.', 'atlas_mountains.jpg', '4.9', 'Dependent on tour', '0.00', 'Nature'),
(265, 'São Paulo', 'Ibirapuera Park', 'Explore the expansive Ibirapuera Park, a green oasis in the heart of São Paulo. Enjoy jogging and cycling paths, picnic areas, beautiful gardens, and visit cultural institutions such as the São Paulo Museum of Modern Art and Afro Brazil Museum.', 'ibirapuera_park.jpg', '4.8', '6:00 AM - 10:00 PM', '0.00', 'Park'),
(266, 'São Paulo', 'São Paulo Museum of Art', 'Discover the São Paulo Museum of Art (MASP), home to an extensive collection of European and Brazilian art. Admire iconic works by artists such as Van Gogh, Picasso, and Portinari, and enjoy the unique architectural design of the museum.', 'masp.jpg', '4.7', '10:00 AM - 6:00 PM', '15.00', 'Museum'),
(267, 'São Paulo', 'Mercado Municipal de São Paulo', 'Visit the Mercado Municipal de São Paulo, a bustling market offering a variety of fresh produce, spices, and gourmet products. Sample local delights, including the famous Mortadella sandwich, and soak in the vibrant atmosphere.', 'mercado_municipal.jpg', '4.6', '6:00 AM - 6:00 PM', '0.00', 'Market'),
(268, 'São Paulo', 'Pinacoteca do Estado de São Paulo', 'Immerse yourself in Brazilian art at the Pinacoteca do Estado de São Paulo. Marvel at a vast collection of Brazilian paintings and sculptures, explore temporary exhibitions, and admire the architectural beauty of the museum.', 'pinacoteca.jpg', '4.5', '10:00 AM - 5:30 PM', '10.00', 'Museum'),
(269, 'São Paulo', 'São Paulo Cathedral', 'Visit the São Paulo Cathedral, a towering Neo-Gothic cathedral in the city center. Admire the intricate architectural details, impressive stained glass windows, and attend a mass or a musical performance.', 'sao_paulo_cathedral.jpg', '4.4', 'Open 24 hours', '0.00', 'Religious Site'),
(270, 'São Paulo', 'Avenida Paulista', 'Stroll along Avenida Paulista, one of São Paulo\'s most famous avenues. Explore vibrant neighborhoods, visit art galleries, shop at upscale boutiques, and experience the lively cultural and financial hub of the city.', 'avenida_paulista.jpg', '4.7', 'Open 24 hours', '0.00', 'Landmark'),
(271, 'Krakow', 'Wawel Castle', 'Explore the majestic Wawel Castle, a symbol of Polish royalty and a UNESCO World Heritage site. Visit the State Rooms, Royal Chambers, and the Crown Treasury to admire the beautiful architecture and historical artifacts.', 'wawel_castle.jpg', '4.8', '9:30 AM - 5:00 PM', '15.00', 'Castle'),
(272, 'Krakow', 'Old Town Market Square', 'Discover the bustling heart of Krakow at the Old Town Market Square. Marvel at the stunning St. Mary\'s Basilica, enjoy a horse-drawn carriage ride, and immerse yourself in the lively atmosphere filled with cafes, restaurants, and street performers.', 'market_square.jpg', '4.7', 'Open 24 hours', '0.00', 'Historic Site'),
(273, 'Krakow', 'Auschwitz-Birkenau Memorial and Museum', 'Pay tribute to the victims of the Holocaust with a visit to the Auschwitz-Birkenau Memorial and Museum. Explore the preserved concentration camps, learn about the dark history, and reflect on the atrocities committed during World War II.', 'auschwitz.jpg', '4.9', '9:00 AM - 5:00 PM', '10.00', 'Museum'),
(274, 'Krakow', 'St. Florian\'s Gate', 'Admire the St. Florian\'s Gate, one of the remaining medieval fortifications of Krakow. Walk through the gate and onto Florianska Street, a bustling pedestrian promenade lined with shops, cafes, and historic landmarks.', 'florians_gate.jpg', '4.5', 'Open 24 hours', '0.00', 'Landmark'),
(275, 'Krakow', 'Wieliczka Salt Mine', 'Descend into the fascinating Wieliczka Salt Mine, a UNESCO World Heritage site known for its intricate underground chambers, chapels, and sculptures carved entirely out of salt. Take a guided tour and learn about the history and significance of the mine.', 'wieliczka_salt_mine.jpg', '4.6', '9:00 AM - 5:00 PM', '50.00', 'Cultural Site'),
(276, 'Krakow', 'Kazimierz District', 'Experience the vibrant Kazimierz district, Krakow\'s historic Jewish quarter. Explore the narrow streets lined with synagogues, visit the Galicia Jewish Museum, and enjoy the lively atmosphere filled with trendy cafes, bars, and art galleries.', 'kazimierz.jpg', '4.7', 'Open 24 hours', '0.00', 'Neighborhood');
INSERT INTO `Attractions` (`id`, `location`, `name`, `description`, `image`, `rating`, `opening_hours`, `ticket_price`, `attraction_type`) VALUES
(277, 'Jerusalem', 'Old City of Jerusalem', 'Explore the ancient streets of the Old City of Jerusalem, a UNESCO World Heritage site. Visit significant religious sites including the Western Wall, Church of the Holy Sepulchre, and Al-Aqsa Mosque. Immerse yourself in the rich history and religious significance of this holy city.', 'jerusalem_old_city.jpg', '4.9', 'Open 24 hours', '0.00', 'Historic Site'),
(278, 'Jerusalem', 'Masada National Park', 'Ascend to the top of Masada, an ancient fortress overlooking the Dead Sea. Learn about the heroic story of Jewish resistance against the Romans and enjoy breathtaking views of the surrounding desert landscapes. Don\'t miss the opportunity to float in the salty waters of the Dead Sea.', 'masada.jpg', '4.7', '8:00 AM - 5:00 PM', '25.00', 'National Park'),
(279, 'Jerusalem', 'Yad Vashem Holocaust Memorial', 'Pay tribute to the victims of the Holocaust at Yad Vashem, the world-renowned Holocaust memorial and museum. Explore the exhibitions, memorials, and the poignant Children\'s Memorial to remember and honor those who perished during this dark period in history.', 'yad_vashem.jpg', '4.8', '9:00 AM - 5:00 PM', '0.00', 'Museum'),
(280, 'Jerusalem', 'Mount of Olives', 'Experience panoramic views of Jerusalem from the Mount of Olives. Visit the ancient Jewish cemetery and explore the religious significance of this hill, which is mentioned in both the Old and New Testaments. Don\'t miss the Garden of Gethsemane and the Chapel of the Ascension.', 'mount_of_olives.jpg', '4.6', 'Open 24 hours', '0.00', 'Landmark'),
(281, 'Jerusalem', 'Mahane Yehuda Market', 'Immerse yourself in the vibrant atmosphere of Mahane Yehuda Market, Jerusalem\'s bustling outdoor market. Stroll through the colorful stalls filled with fresh produce, spices, baked goods, and local delicacies. Enjoy a wide variety of food options and soak in the lively ambiance.', 'mahane_yehuda_market.jpg', '4.7', 'Open during daytime', '0.00', 'Market'),
(282, 'Jerusalem', 'Israel Museum', 'Discover the rich art, history, and culture of Israel at the Israel Museum. Explore the extensive collection of artifacts, including the Dead Sea Scrolls, and admire the impressive outdoor sculpture garden. Don\'t miss the iconic Shrine of the Book and the model of ancient Jerusalem.', 'israel_museum.jpg', '4.5', '10:00 AM - 5:00 PM', '20.00', 'Museum'),
(283, 'Cusco', 'Machu Picchu', 'Explore the ancient Inca city of Machu Picchu, one of the New Seven Wonders of the World. Trek through the stunning Andean landscapes and marvel at the impressive architecture and breathtaking views. Immerse yourself in the history and mystery of this UNESCO World Heritage site.', 'machu_picchu.jpg', '4.9', '6:00 AM - 5:30 PM', '70.00', 'Archaeological Site'),
(284, 'Cusco', 'Sacsayhuaman', 'Visit the impressive Inca fortress of Sacsayhuaman, located on the outskirts of Cusco. Admire the massive stone walls and intricate stonework that showcase the remarkable Inca engineering. Learn about the historical and cultural significance of this ancient site.', 'sacsayhuaman.jpg', '4.7', '7:00 AM - 5:00 PM', '30.00', 'Archaeological Site'),
(285, 'Cusco', 'The Sacred Valley', 'Embark on a journey through the beautiful Sacred Valley of the Incas. Visit picturesque towns, traditional markets, and ancient Inca ruins. Enjoy the stunning landscapes, learn about traditional Andean culture, and experience the local way of life.', 'sacred_valley.jpg', '4.8', 'Open during daytime', '0.00', 'Natural Site'),
(286, 'Cusco', 'Qorikancha', 'Discover the ruins of Qorikancha, once the most important temple in the Inca Empire. Marvel at the impressive stonework and learn about the fusion of Inca and Spanish architecture. Explore the site and gain insight into the ancient Inca religion and astronomy.', 'qorikancha.jpg', '4.6', '8:30 AM - 5:30 PM', '15.00', 'Archaeological Site'),
(287, 'Cusco', 'San Pedro Market', 'Immerse yourself in the vibrant atmosphere of San Pedro Market, Cusco\'s main market. Wander through the colorful stalls selling local produce, handicrafts, and traditional goods. Sample delicious Peruvian cuisine and experience the lively ambiance of this bustling market.', 'san_pedro_market.jpg', '4.7', '6:00 AM - 6:00 PM', '0.00', 'Market'),
(288, 'Cusco', 'Rainbow Mountain', 'Embark on an adventure to Rainbow Mountain, a natural wonder with breathtaking colorful striped slopes. Trek through the high-altitude landscapes and witness the unique geological formations. Capture stunning photos and enjoy the beauty of this unique destination.', 'rainbow_mountain.jpg', '4.5', '6:00 AM - 4:00 PM', '60.00', 'Natural Site'),
(289, 'Vancouver', 'Stanley Park', 'Explore the iconic Stanley Park, a lush urban park offering stunning views of the city skyline, forests, beaches, and gardens. Enjoy walking and biking trails, visit the Vancouver Aquarium, or have a picnic in this natural oasis in the heart of the city.', 'stanley_park.jpg', '4.8', 'Open 24/7', '0.00', 'Park'),
(290, 'Vancouver', 'Capilano Suspension Bridge Park', 'Experience the thrill of crossing the Capilano Suspension Bridge, suspended high above the lush rainforest. Explore the treetop walkways, visit the cliffwalk, and immerse yourself in the beauty of nature. Learn about the local flora and fauna in this enchanting park.', 'capilano_bridge.jpg', '4.7', '9:00 AM - 6:00 PM', '53.95', 'Park'),
(291, 'Vancouver', 'Granville Island', 'Discover the vibrant Granville Island, a hub of arts, culture, and culinary delights. Explore the public market, browse through boutique shops, enjoy live performances, and indulge in delicious food from various vendors. Experience the lively atmosphere and creativity of this unique destination.', 'granville_island.jpg', '4.6', 'Open during daytime', '0.00', 'Market'),
(292, 'Vancouver', 'Grouse Mountain', 'Take a scenic gondola ride up to Grouse Mountain and enjoy panoramic views of Vancouver. Explore the mountain trails, watch a lumberjack show, visit the resident grizzly bears, and engage in outdoor activities like skiing, snowboarding, and ziplining, depending on the season.', 'grouse_mountain.jpg', '4.5', '9:00 AM - 10:00 PM', '59.95', 'Mountain'),
(293, 'Vancouver', 'Vancouver Art Gallery', 'Immerse yourself in art and culture at the Vancouver Art Gallery. Explore a diverse collection of contemporary and historical artworks, including pieces by renowned local and international artists. Visit the gallery\'s rotating exhibitions and attend special events.', 'vancouver_art_gallery.jpg', '4.4', '10:00 AM - 5:00 PM', '24.00', 'Art Gallery'),
(294, 'Vancouver', 'Canada Place', 'Visit Canada Place, a prominent waterfront landmark in Vancouver. Admire the distinctive sail-shaped architecture, enjoy the scenic views of the harbor, and learn about Canada\'s history and culture at the Canadian Trail exhibit. Experience the vibrant atmosphere of this iconic location.', 'canada_place.jpg', '4.3', 'Open 24/7', '0.00', 'Landmark'),
(295, 'Beirut', 'Beirut Souks', 'Experience the vibrant atmosphere of Beirut Souks, a modern shopping and entertainment district in the heart of downtown Beirut. Discover luxury boutiques, restaurants, cafes, and cultural events in this lively pedestrian-friendly area.', 'beirut_souks.jpg', '4.7', '10:00 AM - 10:00 PM', '0.00', 'Shopping'),
(296, 'Beirut', 'National Museum of Beirut', 'Visit the National Museum of Beirut and explore its impressive collection of archaeological artifacts. Learn about Lebanon\'s rich history, including Phoenician, Roman, and Byzantine periods, through a range of exhibits and displays.', 'national_museum_of_beirut.jpg', '4.6', '9:00 AM - 5:00 PM', '10.00', 'Museum'),
(297, 'Beirut', 'Jeita Grotto', 'Discover the natural wonder of Jeita Grotto, a breathtaking cave system located just outside of Beirut. Take a boat ride on the underground river and admire the stunning stalactite and stalagmite formations that have formed over thousands of years.', 'jeita_grotto.jpg', '4.8', '9:00 AM - 6:30 PM', '18.00', 'Cave Exploration'),
(298, 'Beirut', 'Pigeon Rocks', 'Marvel at the iconic Pigeon Rocks, a natural rock formation situated off the coast of Beirut. Enjoy the scenic views of the limestone cliffs rising from the sea and take a stroll along the nearby Corniche promenade.', 'pigeon_rocks.jpg', '4.5', 'Open 24 hours', '0.00', 'Natural Landmark'),
(299, 'Beirut', 'Mohammad Al-Amin Mosque', 'Visit the Mohammad Al-Amin Mosque, also known as the Blue Mosque, an impressive architectural landmark in Beirut. Admire the mosque\'s intricate design, grand dome, and minarets that beautifully blend modern and traditional elements.', 'mohammad_al_amin_mosque.jpg', '4.7', 'Open for prayers', '0.00', 'Religious Site'),
(300, 'Beirut', 'Beirut Corniche', 'Take a leisurely walk along the Beirut Corniche, a picturesque waterfront promenade. Enjoy stunning views of the Mediterranean Sea, see iconic landmarks, and relax in the parks and cafes along the way.', 'beirut_corniche.jpg', '4.6', 'Open 24 hours', '0.00', 'Scenic Walk'),
(301, 'Lima', 'Miraflores Boardwalk', 'Stroll along the scenic Miraflores Boardwalk and enjoy panoramic views of the Pacific Ocean. Explore the beautiful parks, gardens, and cliffs along the way, and don\'t miss the iconic Parque del Amor with its famous Love Park statue.', 'miraflores_boardwalk.jpg', '4.7', 'Open 24 hours', '0.00', 'Scenic Walk'),
(302, 'Lima', 'Historic Centre of Lima', 'Visit the Historic Centre of Lima, a UNESCO World Heritage site, and explore its rich colonial architecture. Discover historic buildings, such as the Plaza Mayor, Lima Cathedral, and San Francisco Church, as you immerse yourself in the city\'s history.', 'historic_centre_of_lima.jpg', '4.6', 'Varies by attraction', '0.00', 'Historical Site'),
(303, 'Lima', 'Barranco District', 'Experience the bohemian charm of the Barranco District, known for its vibrant art scene and colorful streets. Discover art galleries, trendy cafes, and live music venues as you wander through this eclectic neighborhood.', 'barranco_district.jpg', '4.5', 'Varies by establishment', '0.00', 'Art and Culture'),
(304, 'Lima', 'Larco Museum', 'Explore the Larco Museum and marvel at its extensive collection of pre-Columbian artifacts. Discover ancient pottery, textiles, and gold and silver pieces that showcase Peru\'s rich indigenous history and culture.', 'larco_museum.jpg', '4.8', '9:00 AM - 10:00 PM', '30.00', 'Museum'),
(305, 'Lima', 'Parque de la Reserva', 'Experience the Magic Water Circuit at Parque de la Reserva, a dazzling water and light show. Enjoy the colorful fountains, water displays, and music in the evening as you witness a unique spectacle of water, sound, and light.', 'parque_de_la_reserva.jpg', '4.7', '5:00 PM - 10:30 PM', '4.00', 'Entertainment'),
(306, 'Lima', 'Pachacamac Archaeological Site', 'Visit the Pachacamac Archaeological Site and explore the ancient ruins of a pre-Inca civilization. Discover the temples, pyramids, and ceremonial buildings that offer insights into Peru\'s ancient past.', 'pachacamac_archaeological_site.jpg', '4.6', '9:00 AM - 5:00 PM', '15.00', 'Archaeological Site'),
(307, 'Oslo', 'Vigeland Sculpture Park', 'Explore the Vigeland Sculpture Park, the world\'s largest sculpture park dedicated to a single artist. Admire over 200 bronze and granite sculptures by Gustav Vigeland, set in beautifully landscaped gardens.', 'vigeland_sculpture_park.jpg', '4.8', 'Open 24 hours', '0.00', 'Sculpture Park'),
(308, 'Oslo', 'Norwegian Museum of Cultural History', 'Visit the Norwegian Museum of Cultural History and delve into Norway\'s rich cultural heritage. Explore historic buildings, traditional costumes, artifacts, and exhibitions that showcase Norwegian history and traditions.', 'norwegian_museum_of_cultural_history.jpg', '4.7', '10:00 AM - 4:00 PM', '120.00', 'Museum'),
(309, 'Oslo', 'Oslo Opera House', 'Experience the stunning Oslo Opera House, known for its modern architecture and scenic location. Take a guided tour of the opera house or enjoy a performance in one of its world-class venues.', 'oslo_opera_house.jpg', '4.6', 'Varies by event', '0.00', 'Landmark'),
(310, 'Oslo', 'Bygdøy Peninsula', 'Explore the beautiful Bygdøy Peninsula and visit its museums and attractions. Discover the Viking Ship Museum, Kon-Tiki Museum, Fram Museum, and more, as you immerse yourself in Norwegian history and maritime heritage.', 'bygdoy_peninsula.jpg', '4.5', 'Varies by attraction', '0.00', 'Museum'),
(311, 'Oslo', 'Akershus Fortress', 'Visit the historic Akershus Fortress and enjoy panoramic views of Oslofjord. Explore the medieval castle, fortress grounds, and museum, and learn about Oslo\'s history, royal heritage, and military past.', 'akershus_fortress.jpg', '4.7', '6:00 AM - 9:00 PM', '100.00', 'Historical Site'),
(312, 'Oslo', 'Nobel Peace Center', 'Discover the Nobel Peace Center and learn about the Nobel Peace Prize and its laureates. Explore interactive exhibitions, multimedia installations, and thought-provoking displays that promote peace and human rights.', 'nobel_peace_center.jpg', '4.6', '10:00 AM - 6:00 PM', '140.00', 'Museum'),
(313, 'Wellington', 'Te Papa Tongarewa', 'Explore Te Papa Tongarewa, the national museum of New Zealand. Immerse yourself in the country\'s art, history, and culture through interactive exhibits, indigenous treasures, and fascinating displays.', 'te_papa_tongarewa.jpg', '4.8', '10:00 AM - 6:00 PM', '0.00', 'Museum'),
(314, 'Wellington', 'Mount Victoria', 'Hike up Mount Victoria and enjoy panoramic views of Wellington city and its surroundings. This scenic lookout offers breathtaking vistas, walking trails, and a peaceful retreat in nature.', 'mount_victoria.jpg', '4.7', 'Open 24 hours', '0.00', 'Nature'),
(315, 'Wellington', 'Cable Car Museum', 'Visit the Cable Car Museum and learn about the history and operation of Wellington\'s iconic cable car. Discover vintage cable cars, displays, and interactive exhibits that showcase the city\'s transportation heritage.', 'cable_car_museum.jpg', '4.6', '9:00 AM - 5:00 PM', '50.00', 'Museum'),
(316, 'Wellington', 'Zealandia', 'Explore Zealandia, an urban ecosanctuary and conservation project that protects native flora and fauna. Take a guided tour or walk through the lush forest to spot unique bird species and learn about New Zealand\'s biodiversity.', 'zealandia.jpg', '4.5', '9:00 AM - 5:00 PM', '90.00', 'Nature Reserve'),
(317, 'Wellington', 'Weta Workshop', 'Discover the creativity of Weta Workshop, renowned for its work on films like \"The Lord of the Rings\" and \"Avatar.\" Take a behind-the-scenes tour, see props and costumes, and learn about the artistry behind movie magic.', 'weta_workshop.jpg', '4.7', '9:00 AM - 5:30 PM', '150.00', 'Studio'),
(318, 'Wellington', 'Wellington Botanic Garden', 'Stroll through the Wellington Botanic Garden and enjoy the beauty of its diverse plant collections. Explore themed gardens, walkways, and enjoy picturesque views of the city and harbor.', 'wellington_botanic_garden.jpg', '4.6', 'Open 24 hours', '0.00', 'Garden'),
(319, 'Kuala Lumpur', 'Petronas Twin Towers', 'Visit the iconic Petronas Twin Towers, the tallest twin towers in the world. Enjoy stunning views of Kuala Lumpur from the observation deck, explore the interactive exhibits, and indulge in shopping and dining at Suria KLCC.', 'petronas_twin_towers.jpg', '4.9', '9:00 AM - 9:00 PM', '80.00', 'Landmark'),
(320, 'Kuala Lumpur', 'Batu Caves', 'Explore the Batu Caves, a limestone hill with a series of caves and Hindu shrines. Climb the colorful steps, visit the main cave temple dedicated to Lord Murugan, and marvel at the towering statue and stunning cave formations.', 'batu_caves.jpg', '4.7', '6:00 AM - 9:00 PM', '0.00', 'Cave'),
(321, 'Kuala Lumpur', 'Central Market', 'Immerse yourself in the vibrant atmosphere of Central Market, a cultural hub and shopping destination. Browse through traditional arts and crafts, souvenirs, and local delicacies, and catch live performances showcasing Malaysia\'s diverse heritage.', 'central_market.jpg', '4.5', '10:00 AM - 10:00 PM', '0.00', 'Market'),
(322, 'Kuala Lumpur', 'KLCC Park', 'Relax and unwind at KLCC Park, a lush green space located near the Petronas Twin Towers. Enjoy leisurely walks, jogging paths, a lake with fountains, children\'s playgrounds, and a stunning view of the city skyline.', 'klcc_park.jpg', '4.6', '7:00 AM - 10:00 PM', '0.00', 'Park'),
(323, 'Kuala Lumpur', 'Chinatown', 'Experience the vibrant energy of Kuala Lumpur\'s Chinatown. Stroll through bustling streets, explore colorful markets, indulge in delicious street food, and discover Chinese temples and traditional architecture.', 'chinatown.jpg', '4.4', 'Open 24 hours', '0.00', 'Neighborhood'),
(324, 'Kuala Lumpur', 'Islamic Arts Museum Malaysia', 'Visit the Islamic Arts Museum Malaysia, showcasing a vast collection of Islamic art from around the world. Explore exhibits on calligraphy, textiles, ceramics, and more, and gain insights into the rich cultural heritage of Islam.', 'islamic_arts_museum.jpg', '4.8', '9:30 AM - 6:00 PM', '20.00', 'Museum'),
(325, 'Cape Town', 'Table Mountain', 'Ascend to the top of Table Mountain and enjoy breathtaking panoramic views of Cape Town and its surroundings. Explore the hiking trails, take a cable car ride, or simply marvel at the natural beauty of this iconic landmark.', 'table_mountain.jpg', '4.9', '8:00 AM - 6:00 PM', '28.00', 'Mountain'),
(326, 'Cape Town', 'Victoria & Alfred Waterfront', 'Experience the vibrant Victoria & Alfred Waterfront, a bustling hub of shopping, dining, and entertainment. Browse through boutique stores, enjoy waterfront dining, visit the Two Oceans Aquarium, or take a boat trip to explore the harbor.', 'waterfront.jpg', '4.8', 'Open during daytime', '0.00', 'Shopping'),
(327, 'Cape Town', 'Cape of Good Hope', 'Embark on a journey to the Cape of Good Hope, a stunning nature reserve at the southernmost tip of the Cape Peninsula. Explore the scenic coastal trails, spot wildlife, and marvel at the dramatic landscapes where the Atlantic and Indian Oceans meet.', 'cape_of_good_hope.jpg', '4.7', '7:00 AM - 5:00 PM', '14.00', 'Nature Reserve'),
(328, 'Cape Town', 'Robben Island', 'Discover the historic Robben Island, a UNESCO World Heritage site known for its political past. Take a ferry ride and tour the prison where Nelson Mandela was held captive during apartheid. Learn about South Africa\'s struggle for freedom and hear stories from former political prisoners.', 'robben_island.jpg', '4.6', '9:00 AM - 3:00 PM', '45.00', 'Historical'),
(329, 'Cape Town', 'Kirstenbosch National Botanical Garden', 'Immerse yourself in the beauty of Kirstenbosch National Botanical Garden, known for its diverse flora and stunning landscapes. Take a leisurely stroll, have a picnic, or attend a live concert in this picturesque setting at the foot of Table Mountain.', 'kirstenbosch_garden.jpg', '4.5', '8:00 AM - 7:00 PM', '13.50', 'Botanical Garden'),
(330, 'Cape Town', 'Boulders Beach', 'Visit Boulders Beach and encounter a colony of African penguins in their natural habitat. Walk along the boardwalks, observe these charming creatures, and even take a swim in the sheltered bays. Experience a unique wildlife encounter in Cape Town.', 'boulders_beach.jpg', '4.4', '8:00 AM - 6:30 PM', '10.00', 'Beach'),
(331, 'Seville', 'Real Alcázar', 'Explore the stunning Real Alcázar, a royal palace known for its intricate architecture and beautiful gardens. Discover the rich history of this UNESCO World Heritage site, wander through the lavish rooms, and immerse yourself in the enchanting ambiance of this remarkable palace.', 'real_alcazar.jpg', '4.9', '9:30 AM - 5:00 PM', '12.50', 'Palace'),
(332, 'Seville', 'Cathedral of Seville', 'Visit the Cathedral of Seville, one of the largest Gothic cathedrals in the world. Marvel at its grandeur, climb to the top of the Giralda tower for panoramic views of the city, and explore the awe-inspiring interior, which includes the tomb of Christopher Columbus.', 'seville_cathedral.jpg', '4.8', '11:00 AM - 5:00 PM', '9.00', 'Cathedral'),
(333, 'Seville', 'Plaza de España', 'Stroll through the magnificent Plaza de España, a square featuring beautiful architecture, tiled benches, and a central canal. Admire the colorful ceramic tiles, take a boat ride along the canal, and soak in the charm of this iconic Seville landmark.', 'plaza_de_espana.jpg', '4.7', 'Open 24 hours', '0.00', 'Square'),
(334, 'Seville', 'Barrio Santa Cruz', 'Get lost in the narrow streets and alleys of Barrio Santa Cruz, the historic Jewish quarter of Seville. Wander through its charming squares, admire the traditional Andalusian architecture, and discover hidden gems, cozy cafés, and boutique shops.', 'barrio_santa_cruz.jpg', '4.6', 'Open during daytime', '0.00', 'Neighborhood'),
(335, 'Seville', 'Metropol Parasol', 'Experience the modern side of Seville at Metropol Parasol, an innovative wooden structure offering panoramic views of the city. Take a walk along the elevated walkways, visit the Antiquarium museum, and enjoy the vibrant atmosphere of this contemporary landmark.', 'metropol_parasol.jpg', '4.5', '10:00 AM - 11:00 PM', '3.00', 'Modern Architecture'),
(336, 'Seville', 'Flamenco Show', 'Immerse yourself in the passion and energy of flamenco with an authentic flamenco show in Seville. Witness the mesmerizing dance, soulful music, and heartfelt singing as you get a glimpse into the rich cultural heritage of Andalusia.', 'flamenco_show.jpg', '4.4', 'Evening shows', '25.00', 'Performing Arts'),
(337, 'Washington, D.C.', 'National Mall', 'Explore the National Mall, a historic park in the heart of Washington, D.C. Visit iconic landmarks such as the Lincoln Memorial, Washington Monument, and the U.S. Capitol. Take a leisurely stroll along the tree-lined pathways and enjoy the beautiful views.', 'national_mall.jpg', '4.9', 'Open 24 hours', '0.00', 'Park'),
(338, 'Washington, D.C.', 'Smithsonian Institution', 'Discover the world\'s largest museum and research complex at the Smithsonian Institution. Explore its numerous museums, including the National Air and Space Museum, National Museum of Natural History, and National Museum of American History, and delve into a wide range of fascinating exhibits.', 'smithsonian_institution.jpg', '4.8', '10:00 AM - 5:30 PM', '0.00', 'Museum'),
(339, 'Washington, D.C.', 'The White House', 'Admire the iconic White House, the official residence and workplace of the President of the United States. Take a guided tour of the public rooms, learn about the history and significance of this historic building, and capture memorable photos.', 'white_house.jpg', '4.7', 'Open for tours by appointment', '0.00', 'Landmark'),
(340, 'Washington, D.C.', 'National Gallery of Art', 'Immerse yourself in art at the National Gallery of Art. Marvel at an extensive collection of paintings, sculptures, and decorative arts from various periods and styles. Explore masterpieces by renowned artists and enjoy special exhibitions.', 'national_gallery_of_art.jpg', '4.6', '10:00 AM - 5:00 PM', '0.00', 'Art Gallery'),
(341, 'Washington, D.C.', 'Library of Congress', 'Visit the Library of Congress, the largest library in the world and a symbol of knowledge and culture. Admire its stunning architecture, explore the vast collection of books, manuscripts, and historical documents, and take a guided tour to learn more about its fascinating history.', 'library_of_congress.jpg', '4.5', '9:30 AM - 4:30 PM', '0.00', 'Library'),
(342, 'Washington, D.C.', 'National Zoo', 'Spend a day at the National Zoo and get up close with a wide variety of animals from around the world. See giant pandas, lions, elephants, and more, and learn about conservation efforts and wildlife preservation.', 'national_zoo.jpg', '4.4', '10:00 AM - 6:00 PM', '0.00', 'Zoo'),
(343, 'Halls Gap', 'Grampians National Park', 'Explore the stunning natural beauty of Grampians National Park. Hike through scenic trails, discover breathtaking viewpoints, and encounter native wildlife. Don\'t miss attractions like The Pinnacle, MacKenzie Falls, and Wonderland Range.', 'grampians_national_park.jpg', '4.9', 'Open 24 hours', '0.00', 'National Park'),
(344, 'Halls Gap', 'Boroka Lookout', 'Visit Boroka Lookout for panoramic views of the surrounding mountains, valleys, and lakes. Marvel at the stunning vistas, capture memorable photos, and take in the beauty of the Grampians region.', 'boroka_lookout.jpg', '4.8', 'Open 24 hours', '0.00', 'Scenic Viewpoint'),
(345, 'Halls Gap', 'Halls Gap Zoo', 'Experience the Halls Gap Zoo and encounter a variety of animals from around the world. Get up close with kangaroos, koalas, emus, and more. Enjoy educational talks, feeding sessions, and interactive experiences.', 'halls_gap_zoo.jpg', '4.7', '9:30 AM - 5:00 PM', '0.00', 'Zoo'),
(346, 'Halls Gap', 'The Balconies', 'Discover The Balconies, a natural rock formation offering spectacular views of the Victoria Valley in the Grampians. Take a short hike to this scenic spot and witness the beauty of the rugged landscape.', 'the_balconies.jpg', '4.6', 'Open 24 hours', '0.00', 'Scenic Viewpoint'),
(347, 'Halls Gap', 'Halls Gap Estate', 'Indulge in wine tasting and vineyard experiences at Halls Gap Estate. Sample a range of wines, learn about the winemaking process, and enjoy the scenic vineyard surroundings. Treat yourself to delicious food and local produce.', 'halls_gap_estate.jpg', '4.5', '11:00 AM - 5:00 PM', '0.00', 'Winery'),
(348, 'Halls Gap', 'Brambuk - The National Park and Cultural Centre', 'Immerse yourself in the rich indigenous culture and history of the Grampians at Brambuk - The National Park and Cultural Centre. Learn about the traditions, stories, and art of the local Aboriginal communities through interactive exhibits and workshops.', 'brambuk_cultural_centre.jpg', '4.4', '9:00 AM - 5:00 PM', '0.00', 'Cultural Centre'),
(349, 'Machu Picchu', 'Machu Picchu Citadel', 'Visit the magnificent Machu Picchu Citadel, a UNESCO World Heritage Site. Explore the ancient Inca ruins, marvel at the architectural wonders, and enjoy breathtaking views of the surrounding mountains and valleys.', 'machu_picchu_citadel.jpg', '4.9', '6:00 AM - 5:30 PM', '130.00', 'Historical Site'),
(350, 'Machu Picchu', 'Huayna Picchu', 'Embark on a thrilling hike up Huayna Picchu, the iconic mountain overlooking Machu Picchu. Challenge yourself with steep trails, experience panoramic views, and discover ancient ruins along the way.', 'huayna_picchu.jpg', '4.8', '7:00 AM - 10:00 AM', '25.00', 'Mountain Hike'),
(351, 'Machu Picchu', 'Inca Trail', 'Embark on the legendary Inca Trail and trek through stunning landscapes to reach Machu Picchu. Experience the beauty of the Andes, encounter Inca ruins, and immerse yourself in the rich cultural heritage of the region.', 'inca_trail.jpg', '4.7', 'Multi-day trek', '500.00', 'Hiking Trail'),
(352, 'Machu Picchu', 'Inti Punku (Sun Gate)', 'Follow the footsteps of the ancient Incas and hike to Inti Punku, also known as the Sun Gate. Enjoy panoramic views of Machu Picchu as you arrive at this historic entry point, and witness the magical sunrise over the ruins.', 'inti_punku.jpg', '4.6', 'Open 24 hours', '0.00', 'Scenic Viewpoint'),
(353, 'Machu Picchu', 'Machu Picchu Museum', 'Delve into the history and culture of Machu Picchu at the Machu Picchu Museum. Learn about the Inca civilization, view artifacts and exhibits, and gain a deeper understanding of this remarkable archaeological site.', 'machu_picchu_museum.jpg', '4.5', '8:00 AM - 4:30 PM', '30.00', 'Museum'),
(354, 'Machu Picchu', 'Machu Picchu Pueblo (Aguas Calientes)', 'Discover the charming town of Machu Picchu Pueblo, also known as Aguas Calientes. Relax in hot springs, explore local markets, and enjoy the vibrant atmosphere of this gateway to Machu Picchu.', 'machu_picchu_pueblo.jpg', '4.4', 'Open 24 hours', '0.00', 'Town'),
(355, 'Santorini', 'Oia', 'Visit the picturesque village of Oia in Santorini. Explore the charming streets, admire the iconic white-washed buildings with blue domes, and enjoy breathtaking sunset views over the Aegean Sea.', 'oia.jpg', '4.9', 'Open 24 hours', '0.00', 'Village'),
(356, 'Santorini', 'Fira', 'Discover the vibrant capital of Santorini, Fira. Stroll along the scenic cliffside pathways, visit local shops and boutiques, and experience the lively atmosphere of this beautiful town.', 'fira.jpg', '4.8', 'Open 24 hours', '0.00', 'Town'),
(357, 'Santorini', 'Santorini Caldera', 'Marvel at the Santorini Caldera, a stunning natural wonder formed by volcanic activity. Enjoy panoramic views of the sea-filled caldera, the dramatic cliffs, and the beautiful Cycladic islands.', 'santorini_caldera.jpg', '4.7', 'Open 24 hours', '0.00', 'Scenic Viewpoint'),
(358, 'Santorini', 'Akrotiri Archaeological Site', 'Explore the ancient ruins of Akrotiri, a Minoan Bronze Age settlement buried under volcanic ash. Discover well-preserved structures, intricate frescoes, and artifacts that offer insights into the past.', 'akrotiri_archaeological_site.jpg', '4.6', '8:00 AM - 3:00 PM', '12.00', 'Archaeological Site'),
(359, 'Santorini', 'Red Beach', 'Experience the unique beauty of Red Beach in Santorini. Admire the striking red cliffs and volcanic pebbles, enjoy crystal-clear waters, and relax on the warm sandy shore.', 'red_beach.jpg', '4.5', 'Open 24 hours', '0.00', 'Beach'),
(360, 'Santorini', 'Wine Tasting in Santorini', 'Indulge in a wine tasting experience in Santorini and savor the local volcanic wines. Visit vineyards, learn about the unique viticulture methods, and sample the island\'s distinct wine varieties.', 'santorini_wine_tasting.jpg', '4.4', 'Depends on wineries', '25.00', 'Winery'),
(361, 'Cairns', 'Great Barrier Reef', 'Explore the magnificent Great Barrier Reef, the world\'s largest coral reef system. Dive or snorkel among vibrant coral formations, encounter diverse marine life, and witness the beauty of this UNESCO World Heritage Site.', 'great_barrier_reef.jpg', '4.9', 'Open 24 hours', '0.00', 'Natural Wonder'),
(362, 'Cairns', 'Kuranda Scenic Railway', 'Embark on a scenic train journey through the lush rainforest on the Kuranda Scenic Railway. Enjoy panoramic views, pass by waterfalls, and experience the beauty of the Barron Gorge National Park.', 'kuranda_scenic_railway.jpg', '4.8', 'Depends on schedule', '55.00', 'Train Ride'),
(363, 'Cairns', 'Skyrail Rainforest Cableway', 'Glide above the rainforest canopy on the Skyrail Rainforest Cableway. Enjoy breathtaking views, learn about the unique flora and fauna, and immerse yourself in the natural beauty of the Wet Tropics of Queensland.', 'skyrail_rainforest_cableway.jpg', '4.7', 'Depends on schedule', '55.00', 'Cable Car Ride'),
(364, 'Cairns', 'Cairns Esplanade', 'Visit the Cairns Esplanade, a vibrant waterfront promenade. Take a leisurely stroll, relax on the sandy beaches, enjoy outdoor fitness activities, and discover local markets and dining options.', 'cairns_esplanade.jpg', '4.6', 'Open 24 hours', '0.00', 'Waterfront'),
(365, 'Cairns', 'Daintree Rainforest', 'Immerse yourself in the ancient beauty of the Daintree Rainforest, one of the oldest rainforests in the world. Take a guided tour, spot unique wildlife, and experience the wonders of this UNESCO World Heritage Site.', 'daintree_rainforest.jpg', '4.5', 'Depends on tour', '100.00', 'Rainforest Exploration'),
(366, 'Cairns', 'Cairns Night Markets', 'Experience the vibrant atmosphere of the Cairns Night Markets. Browse through a variety of stalls offering local arts, crafts, souvenirs, and enjoy delicious street food and live entertainment.', 'cairns_night_markets.jpg', '4.4', '5:00 PM - 11:00 PM', '0.00', 'Market'),
(367, 'Montana', 'Glacier National Park', 'Explore the stunning Glacier National Park, known for its breathtaking landscapes, pristine lakes, and glacier-carved valleys. Enjoy hiking, wildlife viewing, camping, and discover the beauty of this natural wonder.', 'glacier_national_park.jpg', '4.9', 'Open 24 hours', '0.00', 'National Park'),
(368, 'Montana', 'Yellowstone National Park', 'Visit the iconic Yellowstone National Park, America\'s first national park. Witness geysers, colorful hot springs, majestic waterfalls, and abundant wildlife in this vast wilderness.', 'yellowstone_national_park.jpg', '4.8', 'Open 24 hours', '35.00', 'National Park'),
(369, 'Montana', 'Going-to-the-Sun Road', 'Drive along the scenic Going-to-the-Sun Road in Glacier National Park. Enjoy panoramic views of the mountains, alpine meadows, and glacial lakes as you traverse this engineering marvel.', 'going_to_the_sun_road.jpg', '4.7', 'Depends on weather conditions', '0.00', 'Scenic Drive'),
(370, 'Montana', 'Lewis and Clark Caverns State Park', 'Discover the underground wonders of Lewis and Clark Caverns State Park. Take a guided tour through the limestone caverns and marvel at the stunning formations and unique geological features.', 'lewis_and_clark_caverns.jpg', '4.6', 'Depends on tour', '12.00', 'Cave Exploration'),
(371, 'Montana', 'Museum of the Rockies', 'Explore the fascinating Museum of the Rockies in Bozeman. Learn about the region\'s rich natural history, dinosaur fossils, and Native American artifacts through interactive exhibits and engaging displays.', 'museum_of_the_rockies.jpg', '4.5', '10:00 AM - 5:00 PM', '15.00', 'Museum'),
(372, 'Montana', 'Flathead Lake', 'Enjoy the beauty of Flathead Lake, the largest natural freshwater lake in the western United States. Relax on the sandy beaches, go boating or fishing, and soak in the scenic views of the surrounding mountains.', 'flathead_lake.jpg', '4.4', 'Open 24 hours', '0.00', 'Lake Recreation'),
(373, 'Petra', 'Al-Khazneh (The Treasury)', 'Marvel at the iconic Al-Khazneh, also known as The Treasury, a magnificent rock-cut temple in Petra. Admire its intricate façade and learn about its historical significance and architectural beauty.', 'al_khazneh.jpg', '4.9', '6:00 AM - 6:00 PM', '50.00', 'Historical Landmark'),
(374, 'Petra', 'Monastery (Al-Deir)', 'Hike up to the Monastery, another remarkable structure carved into the red sandstone cliffs of Petra. Enjoy panoramic views from the top and appreciate the grandeur of this ancient monument.', 'monastery.jpg', '4.8', '6:00 AM - 6:00 PM', '50.00', 'Historical Landmark'),
(375, 'Petra', 'Siq', 'Embark on a journey through the narrow Siq, a stunning gorge that leads to the ancient city of Petra. Walk along the winding path, surrounded by towering cliffs, and experience the anticipation of reaching the hidden treasures within.', 'siq.jpg', '4.7', '6:00 AM - 6:00 PM', '0.00', 'Scenic Walk'),
(376, 'Petra', 'High Place of Sacrifice', 'Visit the High Place of Sacrifice, an elevated platform offering panoramic views of Petra. Discover the archaeological remains and learn about the religious and ceremonial practices that took place here.', 'high_place_of_sacrifice.jpg', '4.6', '6:00 AM - 6:00 PM', '0.00', 'Historical Site'),
(377, 'Petra', 'Royal Tombs', 'Explore the Royal Tombs of Petra, a collection of impressive burial sites carved into the cliffs. Admire the intricate facades and learn about the royal families that were laid to rest in these grand structures.', 'royal_tombs.jpg', '4.5', '6:00 AM - 6:00 PM', '0.00', 'Historical Landmark'),
(378, 'Petra', 'Petra By Night', 'Experience the enchanting Petra By Night tour, where the Treasury is illuminated by candlelight. Walk along the candlelit path, listen to traditional music, and immerse yourself in the magical ambiance of Petra after dark.', 'petra_by_night.jpg', '4.4', '8:30 PM - 10:30 PM (selected days)', '25.00', 'Night Tour'),
(379, 'Chichen Itza', 'El Castillo', 'El Castillo, also known as the Temple of Kukulcan, is the iconic pyramid-shaped structure at Chichen Itza. It represents Mayan architectural brilliance and serves as a testament to their astronomical knowledge. Visitors can climb the pyramid and witness the incredible views from the top.', 'el_castillo.jpg', '4.8', '8:00 AM - 4:30 PM', '25.00', 'Historical Landmark'),
(380, 'Chichen Itza', 'Sacred Cenote', 'The Sacred Cenote is a natural sinkhole that was considered a sacred site by the ancient Mayans. It was used for rituals and offerings, and artifacts discovered within the cenote provide valuable insights into Mayan civilization. Visitors can learn about the cultural significance of the cenote and appreciate its natural beauty.', 'sacred_cenote.jpg', '4.7', '8:00 AM - 5:00 PM', '15.00', 'Natural Wonder'),
(381, 'Chichen Itza', 'The Observatory (Caracol)', 'The Observatory, also known as Caracol, is an ancient Mayan observatory structure at Chichen Itza. It played a crucial role in studying celestial events and aligning the Mayan calendar. Visitors can explore the ruins and gain insights into the astronomical knowledge of the Mayan civilization.', 'the_observatory.jpg', '4.6', '8:00 AM - 4:30 PM', '20.00', 'Historical Landmark'),
(382, 'Chichen Itza', 'Juego de Pelota', 'Juego de Pelota is a Mesoamerican ballcourt where the Mayans played a traditional ball game with great cultural and religious significance. The architectural design of the ballcourt reflects the complexities of the game and its role in Mayan society. Visitors can learn about the rules and symbolism associated with this ancient sport.', 'juego_de_pelota.jpg', '4.5', '8:00 AM - 5:00 PM', '10.00', 'Historical Site'),
(383, 'Chichen Itza', 'Sacred Cenote', 'Visit the Sacred Cenote, a natural sinkhole that was a sacred site for the Mayans. Learn about its religious significance and admire the crystal-clear waters. Some tours offer the opportunity to swim or snorkel in this unique natural wonder.', 'sacred_cenote.jpg', '4.7', '08:00 AM - 05:00 PM', '25.00', 'Natural Landmark'),
(384, 'Chichen Itza', 'Great Ball Court', 'Step into the Great Ball Court, an impressive playing field where the ancient Mayans competed in the Mesoamerican ballgame. Discover the remarkable acoustics and learn about the rituals and traditions associated with this ancient sport.', 'great_ball_court.jpg', '4.6', '08:00 AM - 05:00 PM', '15.00', 'Archaeological Site'),
(385, 'Hoi An', 'Hoi An Ancient Town', 'Hoi An Ancient Town is a UNESCO World Heritage Site renowned for its well-preserved historical architecture. Visitors can stroll through the narrow streets, adorned with lanterns, and admire the blend of Vietnamese, Chinese, and Japanese influences. The town offers a rich cultural experience with its traditional houses, temples, and vibrant markets.', 'hoi_an_ancient_town.jpg', '4.9', '24 hours', '0.00', 'Historical Landmark'),
(386, 'Hoi An', 'Japanese Covered Bridge', 'The Japanese Covered Bridge is an iconic landmark in Hoi An. This elegant wooden bridge is adorned with intricate carvings and serves as a symbol of cultural exchange between the Japanese and Vietnamese communities. Visitors can cross the bridge and enjoy the scenic views of the Thu Bon River.', 'japanese_covered_bridge.jpg', '4.8', '24 hours', '0.00', 'Historical Landmark'),
(387, 'Hoi An', 'An Bang Beach', 'An Bang Beach is a pristine and picturesque beach located near Hoi An. Visitors can relax on the golden sands, swim in the clear blue waters, and soak up the tranquil ambiance. The beach offers a serene escape from the bustling city and provides opportunities for sunbathing, beach picnics, and water sports.', 'an_bang_beach.jpg', '4.7', '24 hours', '0.00', 'Beach'),
(388, 'Hoi An', 'Tra Que Vegetable Village', 'Tra Que Vegetable Village is a charming rural village famous for its organic vegetable gardens. Visitors can immerse themselves in the local farming activities, learn traditional farming techniques, and even participate in cooking classes using freshly harvested produce. It\'s a great way to experience the agricultural heritage of Hoi An.', 'tra_que_vegetable_village.jpg', '4.6', '8:00 AM - 5:00 PM', '5.00', 'Cultural Experience'),
(389, 'Hoi An', 'Assembly Hall of the Fujian Chinese Congregation', 'Visit the Assembly Hall of the Fujian Chinese Congregation, an ornate temple dedicated to the sea goddess Mazu. Admire the intricate woodwork, colorful statues, and detailed carvings that depict Chinese legends and mythology.', 'assembly_hall_fujian_chinese_congregation.jpg', '4.6', '08:00 AM - 05:00 PM', '8.00', 'Religious Site'),
(390, 'Hoi An', 'My Son Sanctuary', 'Discover the ancient ruins of My Son Sanctuary, a UNESCO World Heritage site. Explore the remnants of the Champa Kingdom, admire the intricate Hindu temples, and learn about the rich cultural and historical significance of this archaeological site.', 'my_son_sanctuary.jpg', '4.4', '06:30 AM - 05:30 PM', '20.00', 'Archaeological Site'),
(391, 'Bora Bora', 'Matira Beach', 'Matira Beach is considered one of the most beautiful beaches in the world. With its crystal-clear turquoise waters, pristine white sand, and stunning views, it\'s a paradise for beach lovers. Visitors can relax on the beach, swim in the warm waters, and indulge in various water activities such as snorkeling and paddleboarding.', 'matira_beach.jpg', '4.9', '24 hours', '0.00', 'Beach'),
(392, 'Bora Bora', 'Mount Otemanu', 'Mount Otemanu is an iconic volcanic peak that dominates the landscape of Bora Bora. Although climbing the mountain can be challenging and requires experience, visitors can admire its majestic presence from various vantage points on the island. The mountain offers breathtaking views and is a photographer\'s delight.', 'mount_otemanu.jpg', '4.8', '24 hours', '0.00', 'Natural Wonder'),
(393, 'Bora Bora', 'Bora Bora Lagoonarium', 'The Bora Bora Lagoonarium is a unique marine sanctuary where visitors can explore the vibrant underwater world of Bora Bora. Snorkeling or diving in the lagoonarium provides an opportunity to encounter colorful coral reefs, tropical fish, and even friendly sharks and stingrays. It\'s a must-visit for nature enthusiasts.', 'bora_bora_lagoonarium.jpg', '4.7', '9:00 AM - 5:00 PM', '50.00', 'Marine Adventure'),
(394, 'Bora Bora', 'Matira Point', 'Matira Point is a scenic viewpoint that offers panoramic vistas of Bora Bora\'s lagoon and surrounding islands. Visitors can capture breathtaking photographs, enjoy the sunset, and appreciate the natural beauty of the South Pacific. It\'s a romantic spot for couples and a tranquil setting for relaxation.', 'matira_point.jpg', '4.6', '24 hours', '0.00', 'Scenic Viewpoint'),
(395, 'Bora Bora', 'Bloody Mary\'s', 'Indulge in a dining experience at the famous Bloody Mary\'s restaurant. Enjoy delicious seafood, tropical cocktails, and the vibrant atmosphere of this iconic Bora Bora establishment.', 'bloody_marys.jpg', '4.6', '06:00 PM - 11:00 PM', '100.00', 'Restaurant'),
(396, 'Bora Bora', 'Mount Pahia', 'Embark on a challenging hike up Mount Pahia for breathtaking views of Bora Bora and its surrounding islands. Traverse lush forests, rocky terrains, and steep slopes to reach the summit of this volcanic peak.', 'mount_pahia.jpg', '4.4', '24/7', '0.00', 'Hiking Trail'),
(397, 'Puerto Iguazú', 'Iguazu Falls', 'Witness the awe-inspiring beauty of Iguazu Falls, one of the world\'s most stunning natural wonders. Marvel at the powerful cascades and experience the breathtaking views from various viewpoints.', 'iguazu_falls.jpg', '4.9', '08:00 AM - 06:00 PM', '20.00', 'Waterfall'),
(398, 'Puerto Iguazú', 'Garganta del Diablo', 'Explore the Garganta del Diablo, a mesmerizing waterfall at Iguazu Falls. Walk along the scenic trails and feel the spray of the falls as you stand on the lookout platforms near the thundering cascade.', 'garganta_del_diablo.jpg', '4.8', '08:00 AM - 05:00 PM', '15.00', 'Scenic Spot'),
(399, 'Puerto Iguazú', 'Boat Safari', 'Embark on an exhilarating boat safari adventure on the Iguazu River. Get up close to the falls, feel the adrenaline rush as the boat approaches the cascades, and enjoy the refreshing mist.', 'boat_safari.jpg', '4.7', '09:00 AM - 03:00 PM', '50.00', 'Adventure Activity'),
(400, 'Puerto Iguazú', 'Macuco Trail', 'Take a scenic hike along the Macuco Trail and immerse yourself in the lush rainforest of Iguazu National Park. Encounter diverse flora and fauna, and enjoy the tranquility of this pristine natural environment.', 'macuco_trail.jpg', '4.6', '08:00 AM - 06:00 PM', '10.00', 'Hiking Trail'),
(401, 'Puerto Iguazú', 'Bird Park', 'Visit the Bird Park near Iguazu Falls and admire a variety of colorful bird species from South America. Walk through large aviaries, observe toucans, macaws, and other exotic birds in their natural habitat.', 'bird_park.jpg', '4.5', '09:00 AM - 05:00 PM', '30.00', 'Zoo'),
(402, 'Puerto Iguazú', 'Three Borders Landmark', 'Experience the cultural significance of the Three Borders Landmark, where Argentina, Brazil, and Paraguay meet. Enjoy panoramic views, learn about the history of the region, and witness the merging of the Iguazu and Parana rivers.', 'three_borders_landmark.jpg', '4.4', '08:00 AM - 07:00 PM', '5.00', 'Historical Landmark'),
(403, 'Angkor Wat', 'Angkor Wat Temple', 'Angkor Wat is a magnificent temple complex and a UNESCO World Heritage Site. It is the largest religious monument in the world and represents the pinnacle of Khmer architecture. Visitors can explore the intricate carvings, climb to the top of the central tower for panoramic views, and witness the magical sunrise or sunset over the temple.', 'angkor_wat_temple.jpg', '4.9', '5:00 AM - 6:00 PM', '20.00', 'Historical Landmark'),
(404, 'Angkor Wat', 'Bayon Temple', 'Bayon Temple is known for its iconic stone faces that adorn the towers. This impressive temple is part of the Angkor Thom complex and offers a glimpse into the rich history and spirituality of the Khmer Empire. Visitors can wander through the labyrinthine corridors and marvel at the intricate bas-reliefs.', 'bayon_temple.jpg', '4.8', '7:30 AM - 5:30 PM', '15.00', 'Historical Landmark'),
(405, 'Angkor Wat', 'Ta Prohm Temple', 'Ta Prohm Temple is famous for its picturesque blend of ancient ruins and overgrown vegetation. The temple\'s unique appearance, with tree roots entwined among the stones, has made it a popular site for photographers and movie enthusiasts. Visitors can explore the atmospheric ruins and experience the mystical ambiance.', 'ta_prohm_temple.jpg', '4.7', '7:30 AM - 5:30 PM', '15.00', 'Historical Landmark'),
(406, 'Angkor Wat', 'Angkor Thom', 'Angkor Thom is an ancient city that served as the capital of the Khmer Empire. It houses several notable temples, including Bayon and Baphuon, along with grand gates, terraces, and other architectural marvels. Visitors can delve into the rich history and explore the vast archaeological site.', 'angkor_thom.jpg', '4.6', '7:30 AM - 5:30 PM', '15.00', 'Historical Site'),
(407, 'Angkor Wat', 'Banteay Srei Temple', 'Visit the exquisite Banteay Srei Temple, renowned for its delicate carvings and pink sandstone construction. Admire the intricate details and fine craftsmanship of this temple dedicated to the Hindu god Shiva.', 'banteay_srei_temple.jpg', '4.6', '07:30 AM - 05:30 PM', '25.00', 'Historical Site'),
(408, 'Angkor Wat', 'Sunrise at Angkor Wat', 'Witness the awe-inspiring sunrise at Angkor Wat and see the temple bathed in golden light. Capture stunning photographs and experience the spiritual ambiance during this early morning visit.', 'sunrise_at_angkor_wat.jpg', '4.4', '05:00 AM - 06:30 AM', '50.00', 'Scenic Spot'),
(409, 'Agra', 'Taj Mahal', 'Marvel at the iconic Taj Mahal, a UNESCO World Heritage Site and one of the Seven Wonders of the World. Admire the stunning white marble mausoleum, intricate architecture, and beautiful gardens.', 'taj_mahal.jpg', '4.9', '06:00 AM - 06:30 PM', '20.00', 'Historical Site'),
(410, 'Agra', 'Agra Fort', 'Explore the majestic Agra Fort, a UNESCO World Heritage Site and a significant Mughal architectural masterpiece. Discover its impressive palaces, grand halls, and beautiful views of the Taj Mahal.', 'agra_fort.jpg', '4.8', '06:00 AM - 06:30 PM', '15.00', 'Historical Site'),
(411, 'Agra', 'Fatehpur Sikri', 'Visit the abandoned city of Fatehpur Sikri, a UNESCO World Heritage Site. Explore its well-preserved structures, including the Buland Darwaza, Jama Masjid, and Panch Mahal.', 'fatehpur_sikri.jpg', '4.7', '09:00 AM - 05:00 PM', '10.00', 'Historical Site'),
(412, 'Agra', 'Mehtab Bagh', 'Enjoy serene views of the Taj Mahal from Mehtab Bagh, a beautiful Mughal garden located across the Yamuna River. Capture breathtaking sunset or sunrise views of the Taj Mahal.', 'mehtab_bagh.jpg', '4.6', '06:00 AM - 06:30 PM', '5.00', 'Garden'),
(413, 'Agra', 'Tomb of Itimad-ud-Daulah', 'Visit the Tomb of Itimad-ud-Daulah, often referred to as the \"Baby Taj.\" Explore the intricate marble work and peaceful gardens of this tomb, which served as a precursor to the Taj Mahal.', 'tomb_of_itimad_ud_daulah.jpg', '4.5', '06:00 AM - 06:30 PM', '7.00', 'Historical Site'),
(414, 'Agra', 'Akbar\'s Tomb', 'Discover the grandeur of Akbar\'s Tomb, the final resting place of the Mughal emperor Akbar. Explore the beautiful mausoleum and its surrounding gardens and marvel at the architectural brilliance.', 'akbars_tomb.jpg', '4.4', '06:00 AM - 06:30 PM', '12.00', 'Historical Site'),
(415, 'Arizona', 'Grand Canyon National Park', 'Experience the awe-inspiring beauty of the Grand Canyon, one of the world\'s most famous natural wonders. Explore the vast canyon, hike its trails, or enjoy breathtaking views from various viewpoints.', 'grand_canyon.jpg', '4.9', '24/7', '35.00', 'National Park'),
(416, 'Arizona', 'Antelope Canyon', 'Discover the stunning slot canyons of Antelope Canyon, known for their captivating light beams and unique rock formations. Take a guided tour and capture incredible photographs of this natural masterpiece.', 'antelope_canyon.jpg', '4.8', '08:00 AM - 05:00 PM', '25.00', 'Natural Landmark');
INSERT INTO `Attractions` (`id`, `location`, `name`, `description`, `image`, `rating`, `opening_hours`, `ticket_price`, `attraction_type`) VALUES
(417, 'Arizona', 'Saguaro National Park', 'Immerse yourself in the beauty of the Sonoran Desert at Saguaro National Park. Admire the iconic saguaro cacti, hike scenic trails, and learn about the diverse desert ecosystem.', 'saguaro_national_park.jpg', '4.7', '24/7', '10.00', 'National Park'),
(418, 'Arizona', 'Monument Valley', 'Embark on a journey through the iconic red rock landscapes of Monument Valley. Take a guided tour to witness towering buttes, mesas, and stunning vistas that have been featured in numerous movies.', 'monument_valley.jpg', '4.6', '08:00 AM - 06:00 PM', '20.00', 'Natural Landmark'),
(419, 'Arizona', 'Horseshoe Bend', 'Marvel at the breathtaking Horseshoe Bend, a horseshoe-shaped meander of the Colorado River. Hike to the viewpoint and capture stunning panoramic views of the river and surrounding cliffs.', 'horseshoe_bend.jpg', '4.5', '24/7', '5.00', 'Natural Landmark'),
(420, 'Arizona', 'Meteor Crater', 'Explore the otherworldly Meteor Crater, the best-preserved meteorite impact site on Earth. Visit the visitor center, learn about meteorite impacts, and marvel at the immense crater.', 'meteor_crater.jpg', '4.4', '07:00 AM - 07:00 PM', '18.00', 'Natural Landmark'),
(421, 'Dubrovnik', 'City Walls of Dubrovnik', 'The City Walls of Dubrovnik are an iconic feature of the city and offer panoramic views of the Adriatic Sea and the charming old town. Visitors can walk along the ancient walls, explore the fortresses, and admire the stunning architecture. It\'s a must-do activity for history and architecture enthusiasts.', 'city_walls_dubrovnik.jpg', '4.9', '8:00 AM - 7:00 PM', '25.00', 'Historical Landmark'),
(422, 'Dubrovnik', 'Old Town of Dubrovnik', 'The Old Town of Dubrovnik is a UNESCO World Heritage Site and a beautifully preserved medieval city. It is known for its narrow cobblestone streets, historic buildings, and lively atmosphere. Visitors can explore the charming alleys, visit historical sites such as the Rector\'s Palace and the Dubrovnik Cathedral, and enjoy the local shops and restaurants.', 'old_town_dubrovnik.jpg', '4.8', '24 hours', '0.00', 'Historical Site'),
(423, 'Dubrovnik', 'Lokrum Island', 'Lokrum Island is a nature reserve located just off the coast of Dubrovnik. It offers pristine beaches, lush vegetation, and historic landmarks. Visitors can take a short ferry ride to the island, explore the botanical gardens, visit the ruins of an old monastery, and relax in the peaceful surroundings.', 'lokrum_island.jpg', '4.7', '9:00 AM - 7:00 PM', '15.00', 'Natural Wonder'),
(424, 'Dubrovnik', 'Cable Car to Mount Srđ', 'The cable car to Mount Srđ provides breathtaking views of Dubrovnik and the surrounding Adriatic coastline. It takes visitors to the top of the mountain, where they can enjoy panoramic vistas, visit the Museum of the Croatian War of Independence, and dine at the mountaintop restaurant. It\'s a fantastic way to appreciate the beauty of the region.', 'cable_car_dubrovnik.jpg', '4.6', '9:00 AM - 9:00 PM', '20.00', 'Scenic Viewpoint'),
(425, 'Dubrovnik', 'Banje Beach', 'Banje Beach is a popular pebble beach located near the Old Town of Dubrovnik. It offers crystal-clear waters, stunning views of the city walls, and a vibrant beach club atmosphere. Visitors can relax on the sun loungers, swim in the Adriatic Sea, enjoy water sports activities, and indulge in delicious food and drinks.', 'banje_beach.jpg', '4.5', '9:00 AM - 7:00 PM', '10.00', 'Beach'),
(426, 'Dubrovnik', 'Fort Lovrijenac', 'Fort Lovrijenac, also known as the \"Dubrovnik Gibraltar,\" is a fortress perched on a cliff overlooking the Adriatic Sea. It played a crucial role in defending the city throughout history. Visitors can explore the fortifications, admire the panoramic views, and learn about its fascinating past. It\'s a must-visit attraction for history buffs and offers a unique perspective of Dubrovnik.', 'fort_lovrijenac.jpg', '4.7', '9:00 AM - 6:00 PM', '15.00', 'Historical Landmark'),
(427, 'Tarragona', 'La Sagrada Familia', 'La Sagrada Familia is an iconic basilica located in Barcelona, Spain. It is a masterpiece designed by the renowned architect Antoni Gaudí and is still under construction. The basilica showcases unique architectural elements, intricate details, and stunning stained glass windows. Visitors can explore the interior, admire the intricate facades, and learn about Gaudí\'s vision for this extraordinary structure.', 'la_sagrada_familia.jpg', '4.8', '9:00 AM - 8:00 PM', '20.00', 'Religious Site'),
(428, 'Tarragona', 'Park Güell', 'Park Güell is a public park in Barcelona, Spain, also designed by Antoni Gaudí. It is known for its vibrant and whimsical architecture, colorful mosaic tiles, and panoramic views of the city. Visitors can stroll through the park\'s gardens, explore the iconic mosaic structures, and enjoy the artistic ambiance. It\'s a popular attraction that offers a unique blend of nature and art.', 'park_guell.jpg', '4.7', '8:00 AM - 9:30 PM', '12.00', 'Park'),
(429, 'Tarragona', 'Casa Batlló', 'Casa Batlló is a renowned building located in the heart of Barcelona, Spain. It is another architectural masterpiece designed by Antoni Gaudí. The building\'s facade features an imaginative design with colorful mosaic tiles and organic shapes. Visitors can take a guided tour to explore the interior, which showcases Gaudí\'s distinctive style and innovative use of space.', 'casa_batllo.jpg', '4.6', '9:00 AM - 9:00 PM', '18.00', 'Architectural Site'),
(430, 'Tarragona', 'Barcelona Gothic Quarter', 'The Barcelona Gothic Quarter, also known as Barri Gòtic, is a historic neighborhood in Barcelona, Spain. It is characterized by narrow streets, medieval architecture, and charming squares. Visitors can wander through the labyrinthine alleys, admire Gothic buildings such as the Barcelona Cathedral, and soak in the vibrant atmosphere. The Gothic Quarter is a must-visit destination for history enthusiasts and those seeking a taste of old-world charm.', 'gothic_quarter.jpg', '4.5', 'Open 24 hours', '0.00', 'Historic Neighborhood'),
(431, 'Tarragona', 'Camp Nou', 'Camp Nou is the iconic stadium of FC Barcelona, one of the most successful football clubs in the world. It has a seating capacity of over 99,000 spectators and hosts thrilling matches and other sports events. Visitors can take a guided tour of the stadium, explore the museum showcasing the club\'s history, and experience the electric atmosphere of this renowned sports venue.', 'camp_nou.jpg', '4.8', '10:00 AM - 6:30 PM', '25.00', 'Sports Stadium'),
(432, 'Tarragona', 'Montjuïc Castle', 'Montjuïc Castle is a historic fortress located on Montjuïc Hill in Barcelona, Spain. It offers panoramic views of the city and the Mediterranean Sea. The castle has played a significant role in the city\'s history and has been transformed into a museum. Visitors can explore the exhibits, learn about the castle\'s past, and enjoy the scenic surroundings.', 'montjuic_castle.jpg', '4.6', '10:00 AM - 7:00 PM', '8.00', 'Historical Landmark'),
(433, 'Namche Bazaar', 'Mount Everest', 'Mount Everest is the highest peak in the world, located in the Himalayas on the border of Nepal and China. It is a challenging and awe-inspiring destination for mountaineers and adventurers. Climbing Mount Everest requires advanced mountaineering skills and proper acclimatization. The journey to the summit is physically demanding but offers breathtaking views and a sense of accomplishment. It\'s a bucket-list destination for those seeking the ultimate mountaineering challenge.', 'mount_everest.jpg', '4.9', 'Open 24 hours', '0.00', 'Mountain'),
(434, 'Namche Bazaar', 'Namche Bazaar', 'Namche Bazaar is a bustling Sherpa town located in the Khumbu region of Nepal, near Mount Everest. It serves as the gateway to Everest Base Camp trekking and is a popular stop for trekkers and climbers. Namche Bazaar offers a variety of accommodations, restaurants, and shops selling trekking gear and local handicrafts. Visitors can explore the town, experience Sherpa culture, and enjoy stunning mountain views.', 'namche_bazaar.jpg', '4.7', 'Open 24 hours', '0.00', 'Town'),
(435, 'Namche Bazaar', 'Everest Base Camp', 'Everest Base Camp is the starting point for climbers attempting to summit Mount Everest. Situated at an elevation of approximately 5,380 meters (17,600 feet), it offers incredible views of the surrounding Himalayan peaks. Trekking to Everest Base Camp is a popular adventure for outdoor enthusiasts. The journey takes you through picturesque valleys, Sherpa villages, and rugged terrain. It\'s a memorable experience that allows you to immerse yourself in the majestic Himalayan landscape.', 'everest_base_camp.jpg', '4.8', 'Open 24 hours', '0.00', 'Base Camp'),
(436, 'Namche Bazaar', 'Sagarmatha National Park', 'Sagarmatha National Park is a UNESCO World Heritage Site located in the Everest region of Nepal. It is home to Mount Everest and a diverse range of flora and fauna. The park offers spectacular mountain scenery, pristine forests, and high-altitude ecosystems. Visitors can embark on trekking adventures, spot rare wildlife species, and explore the unique biodiversity of the Himalayas.', 'sagarmatha_national_park.jpg', '4.6', 'Open 24 hours', '0.00', 'National Park'),
(437, 'Namche Bazaar', 'Tengboche Monastery', 'Tengboche Monastery is a Buddhist monastery situated at an elevation of 3,867 meters (12,687 feet) in the Khumbu region of Nepal. It is one of the most significant monasteries in the Everest region and offers breathtaking views of Mount Everest and its neighboring peaks. Visitors can witness traditional Buddhist ceremonies, explore the monastery complex, and experience the spiritual ambiance of this sacred place.', 'tengboche_monastery.jpg', '4.7', '6:00 AM - 5:00 PM', '0.00', 'Monastery'),
(438, 'Namche Bazaar', 'Gokyo Lakes', 'Gokyo Lakes are a series of turquoise-colored glacial lakes located in the Gokyo Valley of the Everest region in Nepal. The lakes are known for their stunning beauty and are surrounded by snow-capped mountains. Trekking to Gokyo Lakes offers a unique opportunity to witness the Himalayan landscape, encounter remote Sherpa villages, and experience the tranquility of these sacred lakes.', 'gokyo_lakes.jpg', '4.9', 'Open 24 hours', '0.00', 'Natural Landmark'),
(439, 'Milan', 'The Colosseum', 'The Colosseum is an ancient amphitheater located in Rome, Italy. It is one of the most iconic landmarks in the world and a symbol of ancient Roman civilization. Built in the 1st century AD, the Colosseum was used for various events, including gladiatorial contests, public spectacles, and theatrical performances. Today, it stands as a magnificent archaeological site and attracts millions of visitors who come to marvel at its grandeur and learn about its fascinating history.', 'colosseum.jpg', '4.9', '9:00 AM - 7:00 PM', '12.00', 'Historical Landmark'),
(440, 'Milan', 'Roman Forum', 'The Roman Forum is a rectangular plaza surrounded by the ruins of ancient government buildings, temples, and basilicas in Rome, Italy. It was the center of political, commercial, and social life in ancient Rome. Visitors can explore the archaeological remains, including the Temple of Saturn, the Arch of Titus, and the House of the Vestal Virgins. The Roman Forum offers a glimpse into the rich history and grandeur of the Roman Empire.', 'roman_forum.jpg', '4.7', '8:30 AM - 7:00 PM', '10.00', 'Historical Site'),
(441, 'Milan', 'Pantheon', 'The Pantheon is a magnificent ancient temple located in Rome, Italy. Built in the 2nd century AD, it is one of the best-preserved Roman buildings in the world. The Pantheon is renowned for its impressive dome and magnificent architecture. Inside, visitors can admire the intricate details, marble interiors, and the oculus, a large circular opening in the center of the dome. The Pantheon is a masterpiece of engineering and an architectural marvel.', 'pantheon.jpg', '4.8', '9:00 AM - 6:30 PM', '0.00', 'Historical Landmark'),
(442, 'Milan', 'Trevi Fountain', 'The Trevi Fountain is a stunning Baroque fountain located in the heart of Rome, Italy. It is the largest fountain in the city and a popular tourist attraction. Visitors can toss a coin into the fountain, a tradition believed to bring good luck and ensure a return to Rome. The Trevi Fountain\'s intricate sculptures and cascading water make it a must-visit site for those seeking beauty and charm in the Eternal City.', 'trevi_fountain.jpg', '4.7', '24 hours', '0.00', 'Landmark'),
(443, 'Milan', 'Vatican City', 'Vatican City is an independent city-state enclaved within Rome, Italy. It is the spiritual and administrative headquarters of the Roman Catholic Church and the residence of the Pope. Visitors can explore St. Peter\'s Basilica, the Vatican Museums, and the Sistine Chapel, which houses Michelangelo\'s famous frescoes. Vatican City is a UNESCO World Heritage Site and a treasure trove of art, history, and religious significance.', 'vatican_city.jpg', '4.9', '9:00 AM - 6:00 PM', '17.00', 'City'),
(444, 'Milan', 'Piazza Navona', 'Piazza Navona is a beautiful square in Rome, Italy, known for its stunning Baroque architecture and fountains. It is a lively gathering place with outdoor cafes, street performers, and artists. Visitors can admire the famous Fountain of the Four Rivers and the magnificent Sant\'Agnese in Agone church. Piazza Navona exudes a vibrant atmosphere and is a favorite spot for locals and tourists alike.', 'piazza_navona.jpg', '4.8', 'Open 24 hours', '0.00', 'Square'),
(445, 'Jiayuguan', 'Jiayuguan Fort', 'Jiayuguan Fort is an ancient fortress located near the western end of the Great Wall of China. It played a vital role in defending against invasions and served as a significant strategic stronghold.', 'jiayuguan_fort.jpg', '4.5', '09:00 AM - 05:30 PM', '50.00', 'Historical Site'),
(446, 'Jiayuguan', 'Overhanging Great Wall', 'The Overhanging Great Wall is a unique section of the Great Wall that appears to be suspended on the edge of a steep cliff. It offers breathtaking views of the surrounding landscape.', 'overhanging_great_wall.jpg', '4.8', '08:00 AM - 06:00 PM', '60.00', 'Historical Site'),
(447, 'Jiayuguan', 'Wei-Jin Tombs', 'The Wei-Jin Tombs are ancient burial sites dating back to the Wei and Jin dynasties. These tombs feature intricate wall paintings and offer insights into the funerary customs and beliefs of that era.', 'wei_jin_tombs.jpg', '4.6', '08:30 AM - 05:30 PM', '40.00', 'Historical Site'),
(448, 'Jiayuguan', 'Jiayuguan Great Wall Museum', 'The Jiayuguan Great Wall Museum is dedicated to preserving and showcasing the history and culture of the Great Wall. It exhibits artifacts, historical documents, and multimedia presentations.', 'jiayuguan_great_wall_museum.jpg', '4.4', '09:00 AM - 05:00 PM', '30.00', 'Museum'),
(449, 'Jiayuguan', 'Suspension Bridge of Xuanbi', 'The Suspension Bridge of Xuanbi is a thrilling pedestrian bridge that spans the Xuanbi Gorge. Walking across this suspension bridge offers panoramic views of the surrounding natural beauty.', 'suspension_bridge_xuanbi.jpg', '4.7', '24/7', '0.00', 'Outdoor Activity'),
(450, 'Jiayuguan', 'Giant Buddha Temple', 'The Giant Buddha Temple houses a majestic statue of the seated Buddha, which is one of the largest indoor clay sculptures in the world. The temple complex also includes beautiful gardens and other Buddhist artifacts.', 'giant_buddha_temple.jpg', '4.3', '08:00 AM - 05:30 PM', '20.00', 'Religious Site'),
(451, 'Marseille', 'Basilique Notre-Dame de la Garde', 'The Basilique Notre-Dame de la Garde is a beautiful Catholic basilica located on the highest point in Marseille. It offers panoramic views of the city and the Mediterranean Sea. The basilica is known for its stunning architecture and intricate mosaics.', 'basilique_notre_dame_de_la_garde.jpg', '4.8', '9:00 AM - 7:00 PM', '0.00', 'Basilica'),
(452, 'Marseille', 'Vieux-Port (Old Port)', 'Vieux-Port is the historic harbor of Marseille, dating back to ancient times. It is a lively area with bustling markets, restaurants, and cafes. Visitors can take a stroll along the waterfront, admire the boats, and enjoy the vibrant atmosphere of this iconic Marseille landmark.', 'vieux_port.jpg', '4.6', 'Open 24 hours', '0.00', 'Harbor'),
(453, 'Marseille', 'Le Panier', 'Le Panier is the oldest neighborhood in Marseille, known for its narrow streets, colorful houses, and artistic vibe. It is a charming area with trendy boutiques, art galleries, and cafes. Visitors can explore the winding streets, discover hidden squares, and soak in the bohemian atmosphere of Le Panier.', 'le_panier.jpg', '4.7', 'Open 24 hours', '0.00', 'Neighborhood'),
(454, 'Marseille', 'Calanques National Park', 'Calanques National Park is a natural park located along the coastline of Marseille. It is famous for its rugged limestone cliffs, turquoise waters, and hidden coves. Visitors can hike along the scenic trails, swim in the crystal-clear waters, and marvel at the breathtaking beauty of the Calanques.', 'calanques_national_park.jpg', '4.9', 'Open 24 hours', '0.00', 'National Park'),
(455, 'Marseille', 'Marseille Cathedral', 'Marseille Cathedral, also known as Cathédrale de la Major, is a Roman Catholic cathedral in Marseille. It is an architectural masterpiece featuring stunning Byzantine-Roman style. Visitors can admire the intricate details, majestic domes, and beautiful interior of the cathedral.', 'marseille_cathedral.jpg', '4.5', '8:00 AM - 7:00 PM', '0.00', 'Cathedral'),
(456, 'Marseille', 'Musée d\'Histoire de Marseille', 'Musée d\'Histoire de Marseille is a history museum located in Marseille. It showcases the rich history and heritage of the city through a collection of artifacts, archaeological finds, and interactive exhibits. Visitors can learn about Marseille\'s past and its significance in the Mediterranean region.', 'musee_histoire_marseille.jpg', '4.4', '10:00 AM - 6:00 PM', '0.00', 'Museum'),
(457, 'Madrid', 'Museo Nacional del Prado', 'The Museo Nacional del Prado is a renowned art museum located in Madrid, Spain. It houses an extensive collection of European paintings, sculptures, and other artworks. The museum is particularly famous for its collection of masterpieces by Spanish artists such as Velázquez, Goya, and El Greco. It is a must-visit destination for art lovers and enthusiasts.', 'museo_nacional_del_prado.jpg', '4.9', '10:00 AM - 8:00 PM', '0.00', 'Art Museum'),
(458, 'Madrid', 'Puerta del Sol', 'Puerta del Sol is one of the central squares in Madrid and a popular meeting point for both locals and tourists. It is known for its iconic clock tower and the statue of the bear and the strawberry tree. Puerta del Sol is a vibrant area with shops, restaurants, and street performers, making it a lively and bustling place to visit.', 'puerta_del_sol.jpg', '4.7', 'Open 24 hours', '0.00', 'Square'),
(459, 'Madrid', 'Royal Palace of Madrid', 'The Royal Palace of Madrid is the official residence of the Spanish Royal Family in the capital city. It is an architectural marvel with stunning interiors and beautifully landscaped gardens. Visitors can explore the royal chambers, admire the opulent decorations, and learn about the rich history of the Spanish monarchy.', 'royal_palace_of_madrid.jpg', '4.8', '10:00 AM - 8:00 PM', '0.00', 'Palace'),
(460, 'Madrid', 'Retiro Park', 'Retiro Park is a vast green oasis in the heart of Madrid. It features lush gardens, scenic pathways, and a tranquil lake where visitors can rent boats. The park also houses notable landmarks such as the Crystal Palace and the Fountain of the Fallen Angel. Retiro Park is a perfect place to relax, enjoy nature, and escape the bustling city atmosphere.', 'retiro_park.jpg', '4.6', '6:00 AM - 12:00 AM', '0.00', 'Park'),
(461, 'Madrid', 'Plaza Mayor', 'Plaza Mayor is a grand square located in the historic center of Madrid. It is surrounded by beautiful buildings with stunning architecture and elegant arcades. The square is a popular gathering spot and hosts various events, markets, and festivals throughout the year. Visitors can enjoy the vibrant atmosphere, dine at outdoor cafes, and soak in the rich history of Plaza Mayor.', 'plaza_mayor.jpg', '4.7', 'Open 24 hours', '0.00', 'Square'),
(462, 'Madrid', 'Thyssen-Bornemisza Museum', 'The Thyssen-Bornemisza Museum is an art museum located in Madrid, Spain. It houses a diverse collection of artworks from different periods and styles, including Renaissance, Impressionism, and Pop Art. The museum features works by renowned artists such as Van Gogh, Picasso, and Monet. It is a must-visit destination for art enthusiasts seeking a comprehensive art experience in Madrid.', 'thyssen_bornemisza_museum.jpg', '4.5', '10:00 AM - 7:00 PM', '0.00', 'Art Museum'),
(463, 'Luxor', 'Karnak Temple', 'Karnak Temple is a vast complex of ancient Egyptian temples dedicated to the worship of the god Amun. It is one of the largest religious complexes in the world and a major tourist attraction in Luxor.', 'karnak_temple.jpg', '4.8', '08:00 AM - 05:00 PM', '100.00', 'Historical Site'),
(464, 'Luxor', 'Valley of the Kings', 'The Valley of the Kings is a burial site for many pharaohs of the New Kingdom period. It is known for its elaborate tombs, including the famous tomb of Tutankhamun. Explore the rich history and impressive architecture of this archaeological site.', 'valley_of_the_kings.jpg', '4.7', '06:00 AM - 05:00 PM', '150.00', 'Historical Site'),
(465, 'Luxor', 'Luxor Temple', 'Luxor Temple is an ancient temple complex located on the east bank of the Nile River. It was dedicated to the rejuvenation of kingship and hosts various structures and statues depicting ancient Egyptian mythology and rituals.', 'luxor_temple.jpg', '4.6', '06:00 AM - 09:00 PM', '80.00', 'Historical Site'),
(466, 'Luxor', 'Hatshepsut Temple', 'Hatshepsut Temple is an impressive mortuary temple dedicated to the female pharaoh Hatshepsut. It is known for its unique architecture and beautiful reliefs. Discover the stories of Hatshepsut and admire the temple\'s grandeur.', 'hatshepsut_temple.jpg', '4.5', '07:00 AM - 05:00 PM', '90.00', 'Historical Site'),
(467, 'Luxor', 'Colossi of Memnon', 'The Colossi of Memnon are two massive stone statues representing Pharaoh Amenhotep III. These iconic statues are all that remains of Amenhotep\'s mortuary temple and are a popular site for visitors to Luxor.', 'colossi_of_memnon.jpg', '4.4', '24 hours', '0.00', 'Landmark'),
(468, 'Luxor', 'Luxor Museum', 'Luxor Museum houses an impressive collection of ancient Egyptian artifacts, including statues, jewelry, and reliefs. It offers visitors a deeper understanding of the rich history and culture of Luxor.', 'luxor_museum.jpg', '4.3', '09:00 AM - 03:00 PM', '70.00', 'Museum'),
(469, 'Chicago', 'Millennium Park', 'Millennium Park is a public park known for its iconic Cloud Gate sculpture, also known as \"The Bean.\" It offers beautiful green spaces, art installations, and hosts various events and concerts throughout the year.', 'millennium_park.jpg', '4.8', '06:00 AM - 11:00 PM', '0.00', 'Park'),
(470, 'Chicago', 'The Art Institute of Chicago', 'The Art Institute of Chicago is one of the oldest and largest art museums in the United States. It houses a vast collection of artworks from various periods and cultures, including masterpieces by renowned artists.', 'art_institute_of_chicago.jpg', '4.7', '10:30 AM - 05:00 PM', '25.00', 'Museum'),
(471, 'Chicago', 'Navy Pier', 'Navy Pier is a popular tourist attraction and entertainment destination on the shores of Lake Michigan. It features an amusement park, Ferris wheel, restaurants, shops, and offers stunning views of the city skyline.', 'navy_pier.jpg', '4.6', '10:00 AM - 10:00 PM', '0.00', 'Entertainment'),
(472, 'Chicago', 'Willis Tower Skydeck', 'The Willis Tower Skydeck offers breathtaking views of Chicago from its observation deck on the 103rd floor. Experience the thrill of stepping out onto the glass ledge and admire panoramic views of the city and Lake Michigan.', 'willis_tower_skydeck.jpg', '4.5', '09:00 AM - 10:00 PM', '35.00', 'Landmark'),
(473, 'Chicago', 'The Field Museum', 'The Field Museum is a natural history museum that houses a vast collection of artifacts, fossils, and specimens from around the world. Explore exhibits on dinosaurs, ancient civilizations, and the wonders of the natural world.', 'the_field_museum.jpg', '4.4', '09:00 AM - 05:00 PM', '30.00', 'Museum'),
(474, 'Chicago', 'Chicago Riverwalk', 'The Chicago Riverwalk is a scenic walkway along the Chicago River, offering stunning views of the city\'s architecture and waterfront. Enjoy a leisurely stroll, grab a bite to eat at one of the riverside cafes, or take a boat tour to experience the city from the water.', 'chicago_riverwalk.jpg', '4.3', '24 hours', '0.00', 'Landmark'),
(475, 'Canberra', 'Australian War Memorial', 'The Australian War Memorial is a national memorial and museum that honors the sacrifice of Australian soldiers who served in various conflicts. Explore exhibits, pay tribute at the commemorative areas, and attend moving ceremonies.', 'australian_war_memorial.jpg', '4.8', '10:00 AM - 05:00 PM', '0.00', 'Museum'),
(476, 'Canberra', 'Parliament House', 'Parliament House is the seat of the Australian Parliament and an architectural masterpiece. Take a guided tour to learn about the country\'s political system, admire the impressive interiors, and enjoy panoramic views from the rooftop.', 'parliament_house.jpg', '4.7', '09:00 AM - 05:00 PM', '0.00', 'Landmark'),
(477, 'Canberra', 'National Gallery of Australia', 'The National Gallery of Australia houses an extensive collection of Australian and international art. Discover works by renowned artists, attend exhibitions, and explore the beautiful sculpture garden.', 'national_gallery_of_australia.jpg', '4.6', '10:00 AM - 05:00 PM', '20.00', 'Museum'),
(478, 'Canberra', 'Australian National Botanic Gardens', 'The Australian National Botanic Gardens showcase a diverse range of native Australian plants. Enjoy peaceful walks, visit the rainforest gully, and learn about the country\'s unique flora and fauna.', 'australian_botanic_gardens.jpg', '4.5', '08:30 AM - 05:00 PM', '0.00', 'Park'),
(479, 'Canberra', 'Questacon - National Science and Technology Centre', 'Questacon is an interactive science museum that offers engaging exhibits, hands-on activities, and educational programs for visitors of all ages. Explore the wonders of science and technology through exciting displays and experiments.', 'questacon.jpg', '4.4', '09:00 AM - 05:00 PM', '23.00', 'Museum'),
(480, 'Canberra', 'Lake Burley Griffin', 'Lake Burley Griffin is an artificial lake located in the heart of Canberra. Enjoy scenic walks and bike rides along the waterfront, rent a paddleboat or kayak, and take in the beautiful views of the city and surrounding landmarks.', 'lake_burley_griffin.jpg', '4.3', '24 hours', '0.00', 'Landmark'),
(481, 'Corfu', 'Achilleion Palace', 'Achilleion Palace is a stunning neoclassical palace built for Empress Elisabeth of Austria. Marvel at the opulent interiors, explore the beautiful gardens, and enjoy panoramic views of the surrounding landscape.', 'achilleion_palace.jpg', '4.7', '08:00 AM - 06:00 PM', '10.00', 'Palace'),
(482, 'Corfu', 'Old Town of Corfu', 'The Old Town of Corfu is a UNESCO World Heritage Site known for its charming narrow streets, historic buildings, and Venetian influence. Stroll through the labyrinthine alleys, visit the Old Fortress, and admire the elegant architecture.', 'old_town_of_corfu.jpg', '4.6', '24 hours', '0.00', 'Historical'),
(483, 'Corfu', 'Paleokastritsa Beach', 'Paleokastritsa Beach is a picturesque beach nestled amidst cliffs and turquoise waters. Relax on the sandy shore, go for a swim or snorkel in the crystal-clear sea, and take in the breathtaking coastal views.', 'paleokastritsa_beach.jpg', '4.5', '09:00 AM - 07:00 PM', '0.00', 'Beach'),
(484, 'Corfu', 'Kanoni Peninsula', 'The Kanoni Peninsula offers panoramic views of the Ionian Sea and the iconic Vlacherna Monastery. Enjoy a leisurely walk along the scenic pathway, have a meal at a waterfront restaurant, and watch the planes land and take off at the nearby airport.', 'kanoni_peninsula.jpg', '4.4', '24 hours', '0.00', 'Scenic'),
(485, 'Corfu', 'Mon Repos Palace', 'Mon Repos Palace is a neoclassical palace surrounded by lush gardens. Explore the museum inside, stroll through the peaceful park, and relax in the shade of ancient trees.', 'mon_repos_palace.jpg', '4.3', '09:00 AM - 05:00 PM', '6.00', 'Palace'),
(486, 'Corfu', 'Sidari Beach', 'Sidari Beach is known for its unique rock formations and crystal-clear waters. Relax on the sandy beach, explore the caves and cliffs, and enjoy water sports such as snorkeling and diving.', 'sidari_beach.jpg', '4.2', '08:00 AM - 08:00 PM', '0.00', 'Beach'),
(487, 'Granada', 'Alhambra', 'The Alhambra is a magnificent palace and fortress complex with stunning Islamic architecture and lush gardens. Explore the intricate details of the Nasrid Palaces, stroll through the Generalife Gardens, and enjoy panoramic views of Granada from the Alcazaba.', 'alhambra.jpg', '4.7', '08:30 AM - 08:00 PM', '14.00', 'Palace'),
(488, 'Granada', 'Sacromonte', 'Sacromonte is a historic neighborhood known for its cave dwellings and flamenco culture. Experience a traditional flamenco show, visit the cave museums, and enjoy breathtaking views of the Alhambra and the city.', 'sacromonte.jpg', '4.6', '24 hours', '0.00', 'Cultural'),
(489, 'Granada', 'Generalife Gardens', 'The Generalife Gardens are beautiful Moorish gardens adjacent to the Alhambra. Admire the lush greenery, colorful flowers, and tranquil fountains as you stroll through the terraced gardens.', 'generalife_gardens.jpg', '4.5', '08:30 AM - 08:00 PM', '7.00', 'Garden'),
(490, 'Granada', 'Albaicín Neighborhood', 'The Albaicín Neighborhood is a charming and historic district characterized by narrow streets, white-washed houses, and stunning views of the Alhambra. Explore the labyrinthine alleys, visit the Mirador de San Nicolás for panoramic vistas, and discover hidden gems.', 'albaicin_neighborhood.jpg', '4.4', '24 hours', '0.00', 'Historical'),
(491, 'Granada', 'Cathedral of Granada', 'The Cathedral of Granada is an impressive Renaissance cathedral with intricate architectural details. Marvel at the grandeur of the interior, admire the artwork, and climb to the top of the bell tower for panoramic views of the city.', 'cathedral_of_granada.jpg', '4.3', '10:00 AM - 06:00 PM', '5.00', 'Religious'),
(492, 'Granada', 'Science Park', 'The Science Park is an interactive museum and science center where you can explore various scientific exhibits, engage in hands-on activities, and learn about astronomy, physics, and technology.', 'science_park.jpg', '4.2', '10:00 AM - 07:00 PM', '8.00', 'Museum'),
(493, 'Nice', 'Promenade des Anglais', 'Promenade des Anglais is a famous waterfront promenade in Nice, offering stunning views of the Mediterranean Sea. Take a leisurely walk along the promenade, enjoy the vibrant atmosphere, and soak up the beautiful surroundings.', 'promenade_des_anglais.jpg', '4.7', '24 hours', '0.00', 'Scenic'),
(494, 'Nice', 'Castle Hill', 'Castle Hill is a historic site and park with panoramic views of Nice. Explore the ruins of the former castle, discover beautiful gardens, and capture breathtaking photos of the city and coastline.', 'castle_hill.jpg', '4.6', '08:00 AM - 08:00 PM', '0.00', 'Historical'),
(495, 'Nice', 'Old Town (Vieux Nice)', 'The Old Town of Nice, also known as Vieux Nice, is a charming neighborhood with narrow streets, colorful buildings, and lively markets. Explore the local shops, taste delicious cuisine, and immerse yourself in the vibrant atmosphere.', 'old_town.jpg', '4.5', '24 hours', '0.00', 'Historical'),
(496, 'Nice', 'Musee Matisse', 'Musee Matisse is a museum dedicated to the works of Henri Matisse, a renowned French artist. Discover an impressive collection of paintings, sculptures, and drawings that showcase Matisse\'s artistic journey.', 'musee_matisse.jpg', '4.4', '10:00 AM - 06:00 PM', '10.00', 'Art'),
(497, 'Nice', 'Cours Saleya Market', 'Cours Saleya Market is a vibrant open-air market offering a wide variety of fresh produce, flowers, and local products. Stroll through the market, indulge in delicious treats, and experience the lively atmosphere.', 'cours_saleya_market.jpg', '4.3', '06:00 AM - 05:30 PM', '0.00', 'Market'),
(498, 'Nice', 'Russian Orthodox Cathedral', 'The Russian Orthodox Cathedral is a stunning architectural gem in Nice. Admire its beautiful Byzantine-style domes, intricate interior decorations, and peaceful ambiance.', 'russian_orthodox_cathedral.jpg', '4.2', '09:00 AM - 12:00 PM, 02:00 PM - 06:00 PM', '3.00', 'Religious'),
(499, 'Jaipur', 'Amber Fort', 'Amber Fort, also known as Amer Fort, is a magnificent fort located on a hilltop near Jaipur. Explore its stunning architecture, intricate artwork, and enjoy panoramic views of the surrounding landscapes.', 'amber_fort.jpg', '4.8', '08:00 AM - 05:30 PM', '5.00', 'Historical'),
(500, 'Jaipur', 'Hawa Mahal', 'Hawa Mahal, also known as the Palace of Winds, is an iconic palace in Jaipur. Admire its unique honeycomb-like architecture, intricate windows, and learn about its historical significance.', 'hawa_mahal.jpg', '4.7', '09:00 AM - 04:30 PM', '2.00', 'Historical'),
(501, 'Jaipur', 'City Palace', 'City Palace is a grand palace complex in Jaipur that showcases a blend of Rajasthani and Mughal architectural styles. Explore its stunning courtyards, museums, and royal artifacts.', 'city_palace.jpg', '4.6', '09:30 AM - 05:00 PM', '7.00', 'Historical'),
(502, 'Jaipur', 'Jantar Mantar', 'Jantar Mantar is an astronomical observatory in Jaipur, built by Maharaja Jai Singh II. Discover its unique stone instruments used for astronomical measurements and calculations.', 'jantar_mantar.jpg', '4.5', '09:00 AM - 04:30 PM', '3.00', 'Historical'),
(503, 'Jaipur', 'Albert Hall Museum', 'Albert Hall Museum is a stunning museum in Jaipur that houses an extensive collection of artifacts, including paintings, sculptures, and historic artifacts from Rajasthan.', 'albert_hall_museum.jpg', '4.4', '09:00 AM - 05:00 PM', '6.00', 'Museum'),
(504, 'Jaipur', 'Jaigarh Fort', 'Jaigarh Fort is a magnificent fort situated on the Aravalli Hills near Jaipur. Explore its massive walls, ancient weaponry, and enjoy breathtaking views of the city.', 'jaigarh_fort.jpg', '4.3', '09:30 AM - 04:30 PM', '4.00', 'Historical'),
(505, 'Cairns', 'Great Barrier Reef', 'Explore the world-famous Great Barrier Reef, the largest coral reef system on Earth. Dive into the crystal-clear waters, witness vibrant marine life, and experience the beauty of this natural wonder.', 'great_barrier_reef.jpg', '4.9', 'Open 24 hours', '150.00', 'Natural'),
(506, 'Cairns', 'Kuranda Scenic Railway', 'Embark on a scenic train journey aboard the Kuranda Scenic Railway. Wind through the lush rainforest, cross over bridges, and enjoy breathtaking views of waterfalls and stunning landscapes.', 'kuranda_scenic_railway.jpg', '4.7', '09:30 AM - 03:30 PM', '60.00', 'Adventure'),
(507, 'Cairns', 'Skyrail Rainforest Cableway', 'Soar above the tropical rainforest on the Skyrail Rainforest Cableway. Enjoy panoramic views, spot wildlife from above, and immerse yourself in the beauty of the lush surroundings.', 'skyrail_cableway.jpg', '4.6', '09:00 AM - 05:00 PM', '55.00', 'Adventure'),
(508, 'Cairns', 'Tjapukai Aboriginal Cultural Park', 'Experience the rich Aboriginal culture at the Tjapukai Aboriginal Cultural Park. Learn about their traditions, watch cultural performances, and participate in interactive activities.', 'tjapukai_cultural_park.jpg', '4.5', '10:00 AM - 05:00 PM', '45.00', 'Cultural'),
(509, 'Cairns', 'Cairns Esplanade', 'Stroll along the scenic Cairns Esplanade, a waterfront promenade lined with parks, swimming lagoons, and recreational facilities. Enjoy the stunning views and relax in the tropical atmosphere.', 'cairns_esplanade.jpg', '4.4', 'Open 24 hours', '0.00', 'Recreation'),
(510, 'Cairns', 'Cairns Botanic Gardens', 'Visit the Cairns Botanic Gardens, a lush oasis showcasing a diverse range of tropical plants. Take a leisurely walk, enjoy the tranquil atmosphere, and discover the beauty of the native flora.', 'cairns_botanic_gardens.jpg', '4.3', '07:30 AM - 05:30 PM', '0.00', 'Nature'),
(511, 'Arusha', 'Mount Kilimanjaro', 'Embark on a thrilling adventure to Mount Kilimanjaro, the highest peak in Africa. Trek through diverse landscapes, witness breathtaking views, and conquer this iconic mountain.', 'mount_kilimanjaro.jpg', '4.9', 'Open 24 hours', '500.00', 'Adventure'),
(512, 'Arusha', 'Serengeti National Park', 'Explore the world-famous Serengeti National Park, home to diverse wildlife and the great wildebeest migration. Witness incredible animal sightings, go on game drives, and immerse yourself in the African wilderness.', 'serengeti_national_park.jpg', '4.8', 'Open 24 hours', '250.00', 'Nature'),
(513, 'Arusha', 'Ngorongoro Crater', 'Discover the Ngorongoro Crater, a UNESCO World Heritage Site and one of Africa\'s most iconic natural wonders. Witness the abundant wildlife, enjoy breathtaking views, and experience the unique ecosystem.', 'ngorongoro_crater.jpg', '4.7', 'Open 24 hours', '200.00', 'Nature'),
(514, 'Arusha', 'Tarangire National Park', 'Visit Tarangire National Park, known for its diverse wildlife and stunning baobab trees. Enjoy game drives, spot elephants, lions, and other animals, and appreciate the park\'s picturesque landscapes.', 'tarangire_national_park.jpg', '4.6', 'Open 24 hours', '150.00', 'Nature'),
(515, 'Arusha', 'Arusha National Park', 'Experience the beauty of Arusha National Park, a hidden gem with scenic landscapes, stunning lakes, and rich wildlife. Enjoy walking safaris, birdwatching, and admire the majestic Mount Meru.', 'arusha_national_park.jpg', '4.5', '06:00 AM - 06:00 PM', '100.00', 'Nature'),
(516, 'Arusha', 'Maasai Market', 'Immerse yourself in the vibrant Maasai culture at the Maasai Market. Shop for unique crafts, traditional clothing, and handmade souvenirs. Interact with local artisans and learn about their customs.', 'maasai_market.jpg', '4.4', '09:00 AM - 06:00 PM', '0.00', 'Cultural'),
(517, 'Galápagos Islands', 'Charles Darwin Research Station', 'Visit the Charles Darwin Research Station, a center for scientific research and conservation efforts in the Galápagos Islands. Learn about the unique flora and fauna of the islands and the ongoing conservation projects.', 'darwin_research_station.jpg', '4.9', '08:00 AM - 05:00 PM', '10.00', 'Education'),
(518, 'Galápagos Islands', 'Tortuga Bay', 'Explore Tortuga Bay, a pristine beach known for its crystal-clear waters and white sand. Relax on the beach, snorkel in the nearby cove, and spot marine iguanas and sea turtles in their natural habitat.', 'tortuga_bay.jpg', '4.8', '06:00 AM - 06:00 PM', '0.00', 'Nature'),
(519, 'Galápagos Islands', 'Los Tuneles', 'Embark on a memorable snorkeling and diving excursion to Los Tuneles, a series of volcanic tunnels and caves. Encounter an abundance of marine life, including sea turtles, sharks, and rays.', 'los_tuneles.jpg', '4.7', '07:00 AM - 04:00 PM', '150.00', 'Adventure'),
(520, 'Galápagos Islands', 'Santa Cruz Island', 'Visit Santa Cruz Island, the central hub of the Galápagos Islands. Explore the highlands, observe giant tortoises in their natural habitat, and hike to stunning viewpoints overlooking the archipelago.', 'santa_cruz_island.jpg', '4.6', 'Open 24 hours', '0.00', 'Nature'),
(521, 'Galápagos Islands', 'Kicker Rock', 'Go on a thrilling boat tour to Kicker Rock, a dramatic rock formation rising from the ocean. Snorkel or dive around the rock, marvel at the diverse marine life, and witness the beauty of this iconic landmark.', 'kicker_rock.jpg', '4.5', '08:00 AM - 02:00 PM', '100.00', 'Adventure'),
(522, 'Galápagos Islands', 'Sierra Negra Volcano', 'Hike to the Sierra Negra Volcano, one of the most active volcanoes in the Galápagos Islands. Enjoy panoramic views, explore the volcanic landscapes, and witness the immense caldera.', 'sierra_negra_volcano.jpg', '4.4', '08:00 AM - 05:00 PM', '80.00', 'Nature'),
(523, 'Manaus', 'Meeting of the Waters', 'Experience the fascinating Meeting of the Waters, where the Rio Negro and Rio Solimões converge to form the mighty Amazon River. Witness the distinct boundary between the dark Rio Negro and the muddy Rio Solimões.', 'meeting_of_the_waters.jpg', '4.8', 'Open 24 hours', '0.00', 'Nature'),
(524, 'Manaus', 'Teatro Amazonas', 'Explore the iconic Teatro Amazonas, a beautifully preserved opera house in the heart of Manaus. Admire the stunning architecture, attend a performance, and learn about the rich cultural history of the region.', 'teatro_amazonas.jpg', '4.7', '09:00 AM - 05:00 PM', '20.00', 'Cultural'),
(525, 'Manaus', 'Amazon Rainforest Tours', 'Embark on thrilling Amazon Rainforest tours from Manaus. Explore the lush jungle, spot diverse wildlife, encounter indigenous communities, and learn about the unique ecosystems of the world\'s largest tropical rainforest.', 'amazon_rainforest_tours.jpg', '4.6', 'Varies by tour', '100.00', 'Adventure'),
(526, 'Manaus', 'Ponta Negra Beach', 'Relax and unwind at Ponta Negra Beach, a popular waterfront destination in Manaus. Enjoy the sandy beach, swim in the refreshing waters of the Rio Negro, and savor delicious local cuisine at beachside restaurants.', 'ponta_negra_beach.jpg', '4.5', 'Open 24 hours', '0.00', 'Relaxation'),
(527, 'Manaus', 'Amazonas Shopping', 'Indulge in some retail therapy at Amazonas Shopping, the largest shopping mall in Manaus. Browse a wide range of stores, catch a movie at the cinema, and sample local delicacies at the food court.', 'amazonas_shopping.jpg', '4.4', '10:00 AM - 10:00 PM', '0.00', 'Shopping'),
(528, 'Manaus', 'Encontro das Águas Park', 'Visit Encontro das Águas Park, a beautiful park located near the Meeting of the Waters. Take a relaxing walk amidst nature, enjoy picnic areas, and capture stunning views of the merging rivers.', 'encontro_das_aguas_park.jpg', '4.3', '06:00 AM - 06:00 PM', '0.00', 'Nature'),
(529, 'Tromso', 'Northern Lights Tours', 'Embark on unforgettable Northern Lights tours in Tromsø. Witness the mesmerizing natural phenomenon of the Aurora Borealis as it dances across the Arctic sky. Learn about the science and folklore behind this magical display.', 'northern_lights_tours.jpg', '4.9', 'Varies by tour', '150.00', 'Nature'),
(530, 'Tromso', 'Tromsø Ice Cathedral', 'Marvel at the breathtaking beauty of the Tromsø Ice Cathedral, also known as Ishavskatedralen. Admire the stunning architecture, intricate ice sculptures, and enjoy peaceful moments of reflection in this serene place of worship.', 'tromso_ice_cathedral.jpg', '4.8', '10:00 AM - 05:00 PM', '0.00', 'Cultural'),
(531, 'Tromso', 'Cable Car to Mount Storsteinen', 'Take a cable car ride to the top of Mount Storsteinen for panoramic views of Tromsø and its surrounding fjords. Enjoy the stunning vistas, hike along scenic trails, and capture memorable photographs.', 'cable_car_tromso.jpg', '4.7', '09:00 AM - 11:00 PM', '250.00', 'Adventure'),
(532, 'Tromso', 'Arctic Cathedral', 'Visit the iconic Arctic Cathedral, a striking landmark of Tromsø. Admire the distinctive triangular architecture, stunning stained glass windows, and attend a musical concert to experience the acoustics of this unique venue.', 'arctic_cathedral.jpg', '4.6', '10:00 AM - 06:00 PM', '30.00', 'Cultural'),
(533, 'Tromso', 'Polaria', 'Explore the Polaria Arctic Experience Center, a fascinating attraction dedicated to the Arctic region. Learn about the unique wildlife, climate, and indigenous cultures through interactive exhibits, aquariums, and immersive displays.', 'polaria.jpg', '4.5', '10:00 AM - 06:00 PM', '100.00', 'Educational'),
(534, 'Tromso', 'Tromsø Bridge', 'Take a leisurely walk or bike ride across the iconic Tromsø Bridge, connecting the mainland to Tromsø Island. Enjoy the scenic views of the city, the surrounding mountains, and the picturesque Tromsøysundet strait.', 'tromso_bridge.jpg', '4.4', 'Open 24 hours', '0.00', 'Sightseeing'),
(535, 'Marrakech', 'Jardin Majorelle', 'Discover the vibrant Jardin Majorelle, a botanical garden in Marrakech. Explore the lush landscape adorned with exotic plants, striking blue buildings, and visit the Berber Museum housed within.', 'jardin_majorelle.jpg', '4.8', '08:00 AM - 06:00 PM', '70.00', 'Nature'),
(536, 'Marrakech', 'Bahia Palace', 'Step into the opulent world of Bahia Palace in Marrakech. Marvel at the intricate architecture, ornate decorations, and peaceful courtyards as you explore this stunning 19th-century palace.', 'bahia_palace.jpg', '4.7', '09:00 AM - 05:00 PM', '40.00', 'Cultural'),
(537, 'Marrakech', 'Medina of Marrakech', 'Immerse yourself in the vibrant atmosphere of the Medina of Marrakech. Wander through the maze-like alleys, browse the bustling souks, and discover hidden gems, including historical sites, local crafts, and delicious street food.', 'medina_marrakech.jpg', '4.6', 'Open 24 hours', '0.00', 'Sightseeing'),
(538, 'Marrakech', 'Koutoubia Mosque', 'Admire the grandeur of Koutoubia Mosque, the largest mosque in Marrakech. Marvel at its impressive minaret, intricate tilework, and serene surroundings. Take in panoramic views of the city from the nearby gardens.', 'koutoubia_mosque.jpg', '4.5', 'Open 24 hours', '0.00', 'Religious'),
(539, 'Marrakech', 'Atlas Mountains Day Trip', 'Embark on a memorable day trip to the Atlas Mountains from Marrakech. Enjoy scenic drives through picturesque valleys, visit traditional Berber villages, hike in the stunning landscapes, and savor a delicious Moroccan lunch.', 'atlas_mountains.jpg', '4.4', 'Full-day excursion', '200.00', 'Adventure'),
(540, 'Marrakech', 'Jemaa el-Fnaa', 'Experience the lively atmosphere of Jemaa el-Fnaa, Marrakech\'s central square. Witness street performers, musicians, and snake charmers, sample local delicacies at food stalls, and soak up the vibrant energy of this iconic gathering place.', 'jemaa_el_fnaa.jpg', '4.3', 'Open 24 hours', '0.00', 'Entertainment'),
(541, 'Zermatt', 'Matterhorn', 'Discover the iconic Matterhorn, one of the world\'s most famous mountains located in Zermatt, Switzerland. Enjoy breathtaking views, go hiking or skiing in the surrounding area, and capture stunning photographs of this majestic peak.', 'matterhorn.jpg', '4.9', 'Open 24 hours', '0.00', 'Natural'),
(542, 'Zermatt', 'Gornergrat Railway', 'Take a scenic journey on the Gornergrat Railway in Zermatt. Board the cogwheel train and ascend to the Gornergrat summit, offering panoramic views of the surrounding mountains, including the Matterhorn. Enjoy hiking trails, visit the observatory, and indulge in delicious Swiss cuisine.', 'gornergrat_railway.jpg', '4.8', '09:00 AM - 05:00 PM', '100.00', 'Transportation'),
(543, 'Zermatt', 'Klein Matterhorn', 'Experience the stunning Klein Matterhorn, the highest peak in the Swiss Alps accessible by cable car. Enjoy panoramic views, go skiing or snowboarding on the glacier, and visit the Ice Palace to explore ice sculptures and tunnels.', 'klein_matterhorn.jpg', '4.7', '08:00 AM - 04:30 PM', '120.00', 'Adventure'),
(544, 'Zermatt', 'Zermatt Village', 'Explore the charming village of Zermatt, known for its picturesque alpine setting and car-free streets. Stroll along the quaint streets lined with traditional chalets, visit local shops and boutiques, and savor Swiss delicacies at cozy restaurants.', 'zermatt_village.jpg', '4.6', 'Open 24 hours', '0.00', 'Cultural'),
(545, 'Zermatt', 'Gornergrat Observatory', 'Visit the Gornergrat Observatory, located at an altitude of 3,089 meters in Zermatt. Experience an astronomical journey, observe the stars and planets through powerful telescopes, and learn about the wonders of the universe from knowledgeable astronomers.', 'gornergrat_observatory.jpg', '4.5', '09:00 AM - 06:00 PM', '80.00', 'Sightseeing'),
(546, 'Zermatt', 'Matterhorn Glacier Paradise', 'Immerse yourself in the Matterhorn Glacier Paradise, Europe\'s highest cable car station situated at an altitude of 3,883 meters. Enjoy panoramic views, visit the ice palace, experience snow activities, and savor a meal at the summit restaurant.', 'matterhorn_glacier_paradise.jpg', '4.4', '08:00 AM - 05:00 PM', '150.00', 'Nature'),
(547, 'Malé', 'Malé Fish Market', 'Experience the vibrant Malé Fish Market, where you can witness the lively local fishing industry. Explore the colorful market filled with an array of fresh fish and seafood, interact with local fishermen, and get a glimpse into the Maldivian way of life.', 'male_fish_market.jpg', '4.9', '06:00 AM - 06:00 PM', '0.00', 'Market'),
(548, 'Malé', 'Hukuru Miskiy', 'Visit the historic Hukuru Miskiy, also known as the Old Friday Mosque, located in the heart of Malé. Admire the intricate coral stone architecture, beautiful woodwork, and ancient Islamic designs. Explore the interior and learn about the mosque\'s rich history and cultural significance.', 'hukuru_miskiy.jpg', '4.8', '08:00 AM - 05:00 PM', '50.00', 'Religious'),
(549, 'Malé', 'Malé Local Market', 'Immerse yourself in the lively atmosphere of the Malé Local Market. Browse through a variety of stalls selling fresh produce, spices, local handicrafts, and souvenirs. Engage with friendly vendors, sample local snacks, and enjoy a glimpse into the daily life of Maldivians.', 'male_local_market.jpg', '4.7', '06:00 AM - 06:00 PM', '0.00', 'Market'),
(550, 'Malé', 'Malé National Museum', 'Discover the rich history and culture of the Maldives at the Malé National Museum. Explore the exhibits showcasing artifacts, traditional costumes, historical documents, and archaeological findings. Gain insights into the country\'s heritage, traditions, and natural wonders.', 'male_national_museum.jpg', '4.6', '09:00 AM - 05:00 PM', '100.00', 'Museum');
INSERT INTO `Attractions` (`id`, `location`, `name`, `description`, `image`, `rating`, `opening_hours`, `ticket_price`, `attraction_type`) VALUES
(551, 'Malé', 'Artificial Beach', 'Relax and unwind at the picturesque Artificial Beach in Malé. Enjoy the pristine sandy shores, turquoise waters, and scenic views. Take a refreshing swim, soak up the sun, or indulge in water sports activities such as snorkeling, jet skiing, and kayaking.', 'artificial_beach.jpg', '4.5', 'Open 24 hours', '0.00', 'Beach'),
(552, 'Malé', 'Malé Friday Mosque', 'Marvel at the grandeur of the Malé Friday Mosque, one of the most prominent landmarks in Malé. Admire the intricate coral stone architecture, ornate woodcarvings, and stunning minaret. Explore the mosque\'s interior and learn about its religious significance.', 'male_friday_mosque.jpg', '4.4', '08:00 AM - 05:00 PM', '0.00', 'Religious'),
(553, 'Santorini', 'Oia Village', 'Explore the charming village of Oia in Santorini, known for its iconic blue-domed churches and stunning sunset views. Stroll through narrow streets, admire the traditional Cycladic architecture, browse boutique shops, and savor delicious Greek cuisine at local tavernas.', 'oia_village.jpg', '4.9', 'Open 24 hours', '0.00', 'Village'),
(554, 'Santorini', 'Fira Town', 'Discover the bustling capital of Santorini, Fira Town. Wander through the picturesque streets, visit historic sites such as the Archaeological Museum and the Catholic Cathedral, enjoy panoramic views of the caldera, and indulge in shopping and dining at the vibrant town center.', 'fira_town.jpg', '4.8', 'Open 24 hours', '0.00', 'Town'),
(555, 'Santorini', 'Akrotiri Archaeological Site', 'Uncover the ancient ruins of Akrotiri, a well-preserved archaeological site in Santorini. Explore the remnants of the Bronze Age settlement, walk through the excavated streets, and marvel at the preserved frescoes and artifacts that provide insights into the island\'s past.', 'akrotiri_archaeological_site.jpg', '4.7', '08:00 AM - 08:00 PM', '15.00', 'Historical'),
(556, 'Santorini', 'Red Beach', 'Experience the unique beauty of Red Beach in Santorini, renowned for its striking red cliffs and volcanic sand. Take in the dramatic scenery, enjoy a swim in the crystal-clear waters, and marvel at the contrasting colors of the towering cliffs against the azure sea.', 'red_beach.jpg', '4.6', 'Open 24 hours', '0.00', 'Beach'),
(557, 'Santorini', 'Santorini Wineries', 'Indulge in the rich flavors of Santorini\'s renowned wines by visiting local wineries. Take a tour of vineyards, learn about the island\'s unique viticulture methods, and sample a variety of exceptional wines, including the famous Assyrtiko, while enjoying breathtaking views.', 'santorini_wineries.jpg', '4.5', 'Varies by winery', '20.00', 'Winery'),
(558, 'Santorini', 'Santorini Caldera Cruise', 'Embark on a memorable cruise along the majestic Santorini Caldera. Sail around the volcanic crater, witness the stunning cliffs and white-washed villages perched on the edge, soak in the hot springs, savor a delicious Greek meal, and admire the awe-inspiring sunset.', 'santorini_caldera_cruise.jpg', '4.4', 'Varies by tour', '50.00', 'Cruise'),
(559, 'Positano', 'Spiaggia Grande', 'Visit Spiaggia Grande, the main beach of Positano, and soak up the sun on its picturesque shores. Enjoy the crystal-clear waters, rent a sunbed or umbrella, and indulge in delicious seafood at the beachfront restaurants.', 'spiaggia_grande.jpg', '4.9', 'Open 24 hours', '0.00', 'Beach'),
(560, 'Positano', 'Path of the Gods', 'Embark on a breathtaking hike along the Path of the Gods, a scenic trail offering panoramic views of the Amalfi Coast. Traverse terraced vineyards, fragrant lemon groves, and enjoy the stunning vistas of Positano, Capri, and the Mediterranean Sea.', 'path_of_the_gods.jpg', '4.8', 'Open 24 hours', '0.00', 'Hiking'),
(561, 'Positano', 'Villa Rufolo', 'Discover the historic Villa Rufolo, an iconic landmark in Positano. Explore the beautifully landscaped gardens, admire the medieval architecture, and enjoy sweeping views of the coast and the vibrant town below.', 'villa_rufolo.jpg', '4.7', '09:00 AM - 06:00 PM', '10.00', 'Historical'),
(562, 'Positano', 'Positano Cathedral', 'Visit the charming Positano Cathedral, also known as the Church of Santa Maria Assunta. Admire its striking Byzantine icon of the Black Madonna, intricate frescoes, and elegant architectural features that reflect the town\'s rich history and religious significance.', 'positano_cathedral.jpg', '4.6', '08:00 AM - 08:00 PM', '0.00', 'Religious'),
(563, 'Positano', 'Fornillo Beach', 'Relax and unwind at Fornillo Beach, a quieter and more secluded spot in Positano. Enjoy the serene atmosphere, rent a sunbed or umbrella, swim in the calm waters, and savor delicious seafood at the beachfront restaurants.', 'fornillo_beach.jpg', '4.5', 'Open 24 hours', '0.00', 'Beach'),
(564, 'Positano', 'Boat Tour to Capri', 'Embark on a memorable boat tour from Positano to the stunning island of Capri. Sail along the coastline, visit the Blue Grotto, explore the charming town of Capri, and take in the breathtaking views of the Faraglioni rock formations.', 'boat_tour_capri.jpg', '4.4', 'Varies by tour', '80.00', 'Boat Tour'),
(565, 'Monterosso', 'Monterosso Beach', 'Enjoy the golden sands and azure waters of Monterosso Beach, the largest beach in the Cinque Terre region. Relax on a sun lounger, swim in the crystal-clear sea, and indulge in local delicacies at the beachfront restaurants.', 'monterosso_beach.jpg', '4.9', 'Open 24 hours', '0.00', 'Beach'),
(566, 'Monterosso', 'Vernazza', 'Explore the charming village of Vernazza, one of the five picturesque towns of the Cinque Terre. Wander through narrow streets, admire colorful houses, visit the medieval Doria Castle, and take in stunning views of the Ligurian Sea.', 'vernazza.jpg', '4.8', 'Open 24 hours', '0.00', 'Sightseeing'),
(567, 'Monterosso', 'Hiking Trails', 'Embark on breathtaking hikes along the scenic trails of Monterosso. Discover the famous Sentiero Azzurro (Blue Trail) that connects all five towns of the Cinque Terre or explore the lush vegetation and vineyards on the Sentiero del Vino (Wine Trail).', 'hiking_trails.jpg', '4.7', 'Open 24 hours', '0.00', 'Hiking'),
(568, 'Monterosso', 'Monterosso Old Town', 'Stroll through the charming Old Town of Monterosso and soak up its rich history and culture. Explore the narrow streets, admire ancient churches like the Church of San Giovanni Battista, and discover local shops and restaurants.', 'monterosso_old_town.jpg', '4.6', 'Open 24 hours', '0.00', 'Historical'),
(569, 'Monterosso', 'Lemon Gardens', 'Visit the Lemon Gardens of Monterosso and learn about the region\'s traditional lemon cultivation. Take a guided tour, sample local lemon products, and enjoy the refreshing fragrance and vibrant colors of the lemon groves.', 'lemon_gardens.jpg', '4.5', '09:00 AM - 06:00 PM', '5.00', 'Gardens'),
(570, 'Monterosso', 'Boat Tour along the Coast', 'Embark on a scenic boat tour along the stunning coast of Monterosso. Enjoy panoramic views of the rugged cliffs, hidden coves, and colorful villages of the Cinque Terre, and capture unforgettable moments of natural beauty.', 'boat_tour_coast.jpg', '4.4', 'Varies by tour', '60.00', 'Boat Tour'),
(571, 'Banff', 'Banff National Park', 'Discover the breathtaking beauty of Banff National Park, Canada\'s oldest national park. Explore the majestic Rocky Mountains, turquoise lakes, and picturesque valleys. Enjoy hiking, wildlife spotting, camping, and skiing in this stunning natural paradise.', 'banff_national_park.jpg', '4.9', 'Open 24 hours', '0.00', 'National Park'),
(572, 'Banff', 'Lake Louise', 'Marvel at the stunning turquoise waters of Lake Louise, known for its incredible beauty. Take a leisurely stroll along the lake shore, go canoeing, or hike to viewpoints for spectacular views of the surrounding mountains and glaciers.', 'lake_louise.jpg', '4.8', 'Open 24 hours', '0.00', 'Lake'),
(573, 'Banff', 'Banff Gondola', 'Ride the Banff Gondola to the top of Sulphur Mountain for panoramic views of Banff and the surrounding Rockies. Enjoy the breathtaking scenery, visit the interpretive center, and take memorable photos from the observation deck.', 'banff_gondola.jpg', '4.7', '09:00 AM - 06:00 PM', '60.00', 'Gondola'),
(574, 'Banff', 'Moraine Lake', 'Be enchanted by the stunning beauty of Moraine Lake, nestled in the Valley of the Ten Peaks. Admire the vibrant blue-green waters, hike along the shoreline, and capture postcard-worthy photos of the surrounding mountains reflected in the lake.', 'moraine_lake.jpg', '4.6', 'Open 24 hours', '0.00', 'Lake'),
(575, 'Banff', 'Icefields Parkway', 'Embark on a scenic drive along the Icefields Parkway, one of the most picturesque highways in the world. Marvel at glaciers, cascading waterfalls, and snow-capped peaks as you journey through the heart of the Canadian Rockies.', 'icefields_parkway.jpg', '4.5', 'Open 24 hours', '0.00', 'Scenic Drive'),
(576, 'Banff', 'Banff Town', 'Explore the charming town of Banff with its cozy streets, boutique shops, and delicious dining options. Discover the local art scene, relax in hot springs, and immerse yourself in the warm hospitality and mountain culture of this vibrant town.', 'banff_town.jpg', '4.4', 'Open 24 hours', '0.00', 'Town'),
(577, 'Apollo Bay', 'Great Ocean Road', 'Embark on a scenic drive along the Great Ocean Road, one of the world\'s most breathtaking coastal routes. Experience stunning ocean views, dramatic cliffs, pristine beaches, and iconic landmarks like the Twelve Apostles and Loch Ard Gorge.', 'great_ocean_road.jpg', '4.9', 'Open 24 hours', '0.00', 'Scenic Drive'),
(578, 'Apollo Bay', 'Apollo Bay Beach', 'Enjoy the sandy shores and crystal-clear waters of Apollo Bay Beach. Take a leisurely stroll along the beach, go for a refreshing swim, or simply relax and soak up the sun while enjoying the beautiful coastal scenery.', 'apollo_bay_beach.jpg', '4.8', 'Open 24 hours', '0.00', 'Beach'),
(579, 'Apollo Bay', 'Great Otway National Park', 'Explore the stunning landscapes of Great Otway National Park, home to ancient rainforests, cascading waterfalls, and diverse wildlife. Discover hiking trails, spot koalas in their natural habitat, and marvel at the beauty of the Otway Ranges.', 'great_otway_national_park.jpg', '4.7', 'Open 24 hours', '0.00', 'National Park'),
(580, 'Apollo Bay', 'Maits Rest Rainforest Walk', 'Immerse yourself in the tranquility of Maits Rest Rainforest Walk. Wander along the elevated boardwalk, surrounded by lush greenery and towering ferns. Listen to the sounds of nature and spot unique plant and animal species along the way.', 'maits_rest_rainforest_walk.jpg', '4.6', '08:00 AM - 05:00 PM', '0.00', 'Nature Walk'),
(581, 'Apollo Bay', 'Cape Otway Lighthouse', 'Visit the historic Cape Otway Lighthouse, the oldest surviving lighthouse on mainland Australia. Learn about its rich maritime history, enjoy panoramic coastal views from the top, and spot seals and whales during the migration season.', 'cape_otway_lighthouse.jpg', '4.5', '09:00 AM - 05:00 PM', '15.00', 'Lighthouse'),
(582, 'Apollo Bay', 'Apollo Bay Foreshore Market', 'Experience the vibrant atmosphere of the Apollo Bay Foreshore Market. Browse through stalls offering local produce, arts and crafts, and delicious food. Enjoy live music and entertainment while soaking up the coastal ambiance.', 'apollo_bay_foreshore_market.jpg', '4.4', '09:00 AM - 03:00 PM', '0.00', 'Market'),
(583, 'Livingstone', 'Victoria Falls', 'Witness the awe-inspiring beauty of Victoria Falls, one of the Seven Natural Wonders of the World. Marvel at the massive curtain of water as it cascades into the Zambezi Gorge, creating a magnificent display of mist and rainbows.', 'victoria_falls.jpg', '4.9', 'Open 24 hours', '0.00', 'Waterfall'),
(584, 'Livingstone', 'Devil\'s Pool', 'Experience the adrenaline rush of swimming on the edge of Victoria Falls at Devil\'s Pool. Take a thrilling plunge into the natural rock pool and enjoy breathtaking views of the waterfall from a unique and exhilarating perspective.', 'devils_pool.jpg', '4.8', '07:30 AM - 06:00 PM', '120.00', 'Adventure'),
(585, 'Livingstone', 'Livingstone Island', 'Embark on a memorable journey to Livingstone Island, the place where David Livingstone first set eyes on Victoria Falls. Enjoy a guided tour, indulge in a delicious meal, and soak in the scenic beauty of the surrounding landscapes.', 'livingstone_island.jpg', '4.7', '08:00 AM - 06:00 PM', '150.00', 'Island'),
(586, 'Livingstone', 'Elephant Cafe', 'Dine in the company of elephants at the Elephant Cafe. Experience a unique culinary adventure as you savor delicious African cuisine while observing these majestic creatures up close. Interact with elephants in a responsible and ethical environment.', 'elephant_cafe.jpg', '4.6', '12:00 PM - 03:00 PM', '80.00', 'Restaurant'),
(587, 'Livingstone', 'Mosi-oa-Tunya National Park', 'Explore the Mosi-oa-Tunya National Park, a wildlife sanctuary located near Victoria Falls. Embark on thrilling game drives, spot a variety of animals including elephants, zebras, and giraffes, and immerse yourself in the natural beauty of the African wilderness.', 'mosi_oa_tunya_national_park.jpg', '4.5', 'Open 24 hours', '30.00', 'National Park'),
(588, 'Livingstone', 'Livingstone Museum', 'Delve into the history and culture of Livingstone at the Livingstone Museum. Discover fascinating exhibits that showcase the region\'s rich heritage, including artifacts, photographs, and interactive displays that provide insights into Zambia\'s past.', 'livingstone_museum.jpg', '4.4', '09:00 AM - 04:30 PM', '10.00', 'Museum'),
(589, 'Honolulu', 'Waikiki Beach', 'Relax on the pristine shores of Waikiki Beach, known for its golden sand, crystal-clear waters, and stunning views of Diamond Head. Enjoy swimming, surfing, or simply basking in the sun while experiencing the vibrant atmosphere of this iconic beach.', 'waikiki_beach.jpg', '4.9', 'Open 24 hours', '0.00', 'Beach'),
(590, 'Honolulu', 'Pearl Harbor National Memorial', 'Pay homage to the history and sacrifice at Pearl Harbor National Memorial. Explore the exhibits, museums, and memorials that commemorate the events of December 7, 1941, and learn about the impact of World War II on the United States.', 'pearl_harbor.jpg', '4.8', '07:00 AM - 05:00 PM', '12.00', 'Historical Site'),
(591, 'Honolulu', 'Diamond Head State Monument', 'Embark on a hike to the summit of Diamond Head, an iconic volcanic crater overlooking Honolulu. Enjoy panoramic views of the city, coastline, and Pacific Ocean as you explore the crater and its surrounding trails.', 'diamond_head.jpg', '4.7', '06:00 AM - 06:00 PM', '5.00', 'Natural Landmark'),
(592, 'Honolulu', 'Hanauma Bay Nature Preserve', 'Discover the underwater wonders of Hanauma Bay Nature Preserve, a protected marine life conservation area. Snorkel in the clear turquoise waters and encounter a colorful array of tropical fish and coral reefs.', 'hanauma_bay.jpg', '4.6', '06:00 AM - 06:00 PM', '14.99', 'Nature Preserve'),
(593, 'Honolulu', 'Iolani Palace', 'Step back in time with a visit to Iolani Palace, the former royal residence of the Hawaiian monarchs. Take a guided tour of the palace to learn about Hawaii\'s royal history, admire the exquisite architecture, and explore the opulent interiors.', 'iolani_palace.jpg', '4.5', '09:00 AM - 04:00 PM', '27.00', 'Historical Site'),
(594, 'Honolulu', 'Honolulu Museum of Art', 'Immerse yourself in art and culture at the Honolulu Museum of Art. Discover a diverse collection of artworks from Asia, Europe, and the Americas, spanning ancient to contemporary pieces, and experience the vibrant cultural scene of Honolulu.', 'honolulu_museum_of_art.jpg', '4.4', '10:00 AM - 04:30 PM', '20.00', 'Museum'),
(595, 'Hamilton Island', 'Whitehaven Beach', 'Experience the breathtaking beauty of Whitehaven Beach, known for its pristine white sands and crystal-clear turquoise waters. Relax on the beach, take a dip in the inviting waters, and soak in the natural splendor of this iconic Australian destination.', 'whitehaven_beach.jpg', '4.9', 'Open 24 hours', '0.00', 'Beach'),
(596, 'Hamilton Island', 'Great Barrier Reef', 'Explore the world\'s largest coral reef system, the Great Barrier Reef. Dive or snorkel among vibrant coral formations, encounter an abundance of marine life, and marvel at the spectacular colors and diversity of this natural wonder.', 'great_barrier_reef.jpg', '4.8', 'Open 24 hours', '99.00', 'Natural Landmark'),
(597, 'Hamilton Island', 'Hamilton Island Marina', 'Stroll along the vibrant Hamilton Island Marina and indulge in a range of dining, shopping, and entertainment options. Enjoy waterfront dining, browse boutique shops, and soak in the lively atmosphere of this popular hub on Hamilton Island.', 'hamilton_island_marina.jpg', '4.7', 'Open 24 hours', '0.00', 'Marina'),
(598, 'Hamilton Island', 'Catseye Beach', 'Spend a day at Catseye Beach, a beautiful stretch of sand on Hamilton Island. Swim, sunbathe, and enjoy water sports activities in this picturesque beach setting, surrounded by lush greenery and stunning ocean views.', 'catseye_beach.jpg', '4.6', 'Open 24 hours', '0.00', 'Beach'),
(599, 'Hamilton Island', 'Hamilton Island Golf Club', 'Tee off at the Hamilton Island Golf Club, a championship 18-hole golf course set against the backdrop of the Whitsunday Islands. Enjoy a challenging round of golf while taking in the breathtaking views of the ocean and surrounding landscapes.', 'hamilton_island_golf_club.jpg', '4.5', '07:00 AM - 06:00 PM', '150.00', 'Golf Course'),
(600, 'Hamilton Island', 'Wildlife Hamilton Island', 'Encounter native Australian wildlife at Wildlife Hamilton Island. Get up close and personal with koalas, kangaroos, wallabies, and other unique species in a natural bushland setting, and learn about the conservation efforts in place.', 'wildlife_hamilton_island.jpg', '4.4', '09:00 AM - 05:00 PM', '25.00', 'Wildlife Park'),
(601, 'Barguna', 'Bibichini Shahi Mosque', 'Bibichini Shahi Masjid (Bibicini Shahi Mosque), one of the symbols of Mughal architecture in Bangladesh, has been built on a small mound at Bibichini Union in Betagi Upazila of Barguna district. ', 'Bibichini Shahi Mosque.jpg', '4.5', 'Open 24 hours', '150.00', 'Historical Site'),
(602, 'Barguna', 'Haringhata Tourist Centre', 'This place is a part of the Sundarbans. The Baleshwar, Vishkhali, and Pyra rivers flowing through the Haringhata forest merge into the Bay of Bengal. The forest has a watchtower to enjoy the wonderful natural beauty.', 'Haringhata Tourist Centre.jpg', '4.9', '07:00 AM - 06:00 PM', '150.00', 'Historical Site'),
(603, 'Barguna', 'Laldia Forest & Sea Beach', 'Laldia Forest and Sea Beach are located south of Patharghata Upazila of Barguna district. Laldia’s forest is visible when it walks through the Deer Ghat in the Barguna part of the Sundarbans for a couple of hours. ', 'Laldia Forest & Sea Beach.jpg', '4.5', 'Open 24 hours', '150.00', 'Beach'),
(604, 'Barguna', 'Shuvo Sondha Somudro Soikot', 'Surrounded by waves and the green zhouban of the sea, a spectacular beach located in Nalbunia in Nishanbaria Union of Taltali Upazila of Barguna district is called Shuvo Sondha Sea Beach. ', 'Shuvo Sondha Somudro Soikot.jpg', '4.5', 'Open 24 hours', '150.00', 'Beach'),
(605, 'Barguna', 'Tengragiri Ecopark', 'Wildlife Sanctuary Tengragiri Ecopark has been set up at Sonakata Union, 24 km from Taltoli Upazila in Barguna district, with a huge forest cover of Sundarbans.', 'Tengragiri Ecopark.jpg', '4.9', '09:00 AM - 05:00 PM', '150.00', 'Wildlife Park');

-- --------------------------------------------------------

--
-- Table structure for table `flightbook`
--

CREATE TABLE `flightbook` (
  `id` int(255) NOT NULL,
  `dep` varchar(255) DEFAULT NULL,
  `dest` varchar(255) DEFAULT NULL,
  `departure_date` text,
  `departure_time` text,
  `airline` varchar(255) DEFAULT NULL,
  `fare` int(255) DEFAULT NULL,
  `sertax` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `orderid` text NOT NULL,
  `invoiceid` text NOT NULL,
  `invoicedate` date NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` text NOT NULL,
  `adultno` int(255) NOT NULL,
  `childno` int(255) NOT NULL,
  `paytype` text NOT NULL,
  `ccname` text NOT NULL,
  `ccnumber` text NOT NULL,
  `ccexpiration` text NOT NULL,
  `ccv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flightbook`
--

INSERT INTO `flightbook` (`id`, `dep`, `dest`, `departure_date`, `departure_time`, `airline`, `fare`, `sertax`, `total`, `orderid`, `invoiceid`, `invoicedate`, `first`, `last`, `username`, `address`, `email`, `cell`, `adultno`, `childno`, `paytype`, `ccname`, `ccnumber`, `ccexpiration`, `ccv`) VALUES
(1, 'Abu Dhabi International (AUH)', 'Amsterdam (AMS)', '2023-08-10', '12:15:00', 'KLM Royal Dutch Airlines', 9450, 2835, 17010, 'ORDTMS47', 'TMSINV47', '2023-08-10', 'Woliul', 'Test', 'test', 'ghijugyfhxchijhjv ', 'test@gmail.com', '5678909876', 1, 1, 'on', 'serrdftyghuj', '34567', '4/23', ''),
(2, 'Abu Dhabi International (AUH)', 'Amsterdam (AMS)', '2023-08-10', '12:15:00', 'KLM Royal Dutch Airlines', 9450, 3780, 22680, 'ORDTMS52', 'TMSINV52', '2023-07-14', 'Woliul', 'Hasan', 'oli', 'Dhanmondi test', 'oli@test.com', '+8801234567890', 1, 2, 'Credit card', 'Woliul Hasan', '123456789', '06/23', ''),
(3, 'Abu Dhabi International (AUH)', 'Amsterdam (AMS)', '2023-08-10', '12:15:00', 'KLM Royal Dutch Airlines', 9450, 4725, 28350, 'ORDTMS51', 'TMSINV51', '2023-07-14', 'W', 'e', 'ddd', 'fdcgvbhjnkm,', 'd@f.vo', '45678', 2, 1, 'Debit card', 'esdrtfghjkl;', '34567890', '4/23', ''),
(4, 'Dhaka (DAC)', 'Amsterdam (AMS)', '2023-08-05', '08:15:00', 'KLM Royal Dutch Airlines', 5480, 2192, 13152, 'ORDTMS488', 'TMSINVORDTMS48825', '2023-07-14', 'Ettd', 'dfgfg', 'dgfg', 'fff', 'dffg@f.ko', 'dddf', 1, 2, 'Debit card', 'df', '2345', '4/34', ''),
(5, 'Dhaka (DAC)', 'Amsterdam (AMS)', '2023-08-05', '08:15:00', 'KLM Royal Dutch Airlines', 5480, 2740, 16440, 'ORDTMS326', 'TMSINV32625', '2023-07-14', 'szxdcfgvbh', 'dfgbh', 'rfv', 'dfgnjk', 'dferg@gmail.com', '3456789', 1, 3, 'Credit card', 'dfeghj', '23456', '4/23', ''),
(6, 'Dhaka (DAC)', 'Chittagong (CGP)', '2023-08-05', '16:15:00', 'Biman Bangladesh Airlines', 4999, 2500, 14997, 'ORDTMS194', 'TMSINV19410', '2023-07-14', 'Rdfgh', 'ef', 'ertyh', 'sdfghj', 'edftgyhuj@h.vo', '2345678', 2, 1, 'Credit card', 'sdfghjkl', '23456', '4/24', '');

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(255) NOT NULL,
  `dep` varchar(255) DEFAULT NULL,
  `dest` varchar(255) DEFAULT NULL,
  `departure_date` text,
  `departure_time` text,
  `arrival_date` text,
  `arrival_time` text,
  `airline` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`id`, `dep`, `dest`, `departure_date`, `departure_time`, `arrival_date`, `arrival_time`, `airline`, `duration`, `price`) VALUES
(1, 'Dhaka (DAC)', 'Coxs Bazar (CXB)', '2023-07-10', '15:15:00', '2023-07-10', '16:30:00', 'Biman Bangladesh Airlines', '1 hour 15 minutes', '4699'),
(2, 'Dhaka (DAC)', 'Chittagong (CGP)', '2023-07-12', '10:30:00', '2023-07-12', '11:45:00', 'Biman Bangladesh Airlines', '1 hour 15 minutes', '3999'),
(3, 'Dhaka (DAC)', 'Sylhet (ZYL)', '2023-07-15', '08:00:00', '2023-07-15', '09:15:00', 'Novoair', '1 hour 15 minutes', '5998'),
(4, 'Dhaka (DAC)', 'Jessore (JSR)', '2023-07-18', '12:45:00', '2023-07-18', '14:00:00', 'US-Bangla Airlines', '1 hour 15 minutes', '3499'),
(5, 'Dhaka (DAC)', 'Rajshahi (RJH)', '2023-07-21', '16:30:00', '2023-07-21', '17:45:00', 'Biman Bangladesh Airlines', '1 hour 15 minutes', '3999'),
(6, 'Dhaka (DAC)', 'Barisal (BZL)', '2023-07-24', '09:00:00', '2023-07-24', '10:15:00', 'Novoair', '1 hour 15 minutes', '5598'),
(7, 'Dhaka (DAC)', 'Rangpur (RAU)', '2023-07-27', '14:30:00', '2023-07-27', '15:45:00', 'US-Bangla Airlines', '1 hour 15 minutes', '3299'),
(8, 'Dhaka (DAC)', 'Coxs Bazar (CXB)', '2023-07-30', '12:00:00', '2023-07-30', '13:15:00', 'Novoair', '1 hour 15 minutes', '4199'),
(9, 'Dhaka (DAC)', 'Sylhet (ZYL)', '2023-08-02', '09:45:00', '2023-08-02', '11:00:00', 'US-Bangla Airlines', '1 hour 15 minutes', '3499'),
(10, 'Dhaka (DAC)', 'Chittagong (CGP)', '2023-08-05', '16:15:00', '2023-08-05', '17:30:00', 'Biman Bangladesh Airlines', '1 hour 15 minutes', '4999'),
(11, 'Dhaka (DAC)', 'Rajshahi (RJH)', '2023-08-08', '11:30:00', '2023-08-08', '12:45:00', 'US-Bangla Airlines', '1 hour 15 minutes', '3699'),
(12, 'New York (JFK)', 'London (LHR)', '2023-07-20', '09:00:00', '2023-07-20', '20:30:00', 'British Airways', '7 hours 30 minutes', '8000'),
(13, 'Singapore (SIN)', 'Sydney (SYD)', '2023-08-05', '14:45:00', '2023-08-05', '22:30:00', 'Qantas', '7 hours 45 minutes', '9000'),
(14, 'Dubai (DXB)', 'Istanbul (IST)', '2023-08-15', '16:30:00', '2023-08-15', '19:45:00', 'Turkish Airlines', '4 hours 15 minutes', '7500'),
(15, 'Bangkok (BKK)', 'Tokyo (HND)', '2023-09-01', '08:00:00', '2023-09-01', '14:30:00', 'Japan Airlines', '6 hours 30 minutes', '6500'),
(16, 'Sydney (SYD)', 'Melbourne (MEL)', '2023-09-15', '11:30:00', '2023-09-15', '13:15:00', 'Qantas', '1 hour 45 minutes', '3600'),
(17, 'Dhaka (DAC)', 'London (LHR)', '2023-07-20', '09:00:00', '2023-07-20', '20:30:00', 'British Airways', '7 hours 30 minutes', '8000'),
(18, 'Dhaka (DAC)', 'Sydney (SYD)', '2023-08-05', '14:45:00', '2023-08-05', '22:30:00', 'Qantas', '7 hours 45 minutes', '9000'),
(19, 'Dhaka (DAC)', 'Istanbul (IST)', '2023-08-15', '16:30:00', '2023-08-15', '19:45:00', 'Turkish Airlines', '4 hours 15 minutes', '7500'),
(20, 'Dhaka (DAC)', 'Tokyo (HND)', '2023-09-01', '08:00:00', '2023-09-01', '14:30:00', 'Japan Airlines', '6 hours 30 minutes', '6500'),
(21, 'Dhaka (DAC)', 'Melbourne (MEL)', '2023-09-15', '11:30:00', '2023-09-15', '13:15:00', 'Qantas', '1 hour 45 minutes', '3600'),
(22, 'Dhaka (DAC)', 'New York (JFK)', '2023-07-20', '09:00:00', '2023-07-20', '20:30:00', 'Biman Bangladesh Airlines', '11 hours 30 minutes', '5600'),
(23, 'Dhaka (DAC)', 'London (LHR)', '2023-07-25', '10:30:00', '2023-07-25', '19:15:00', 'Biman Bangladesh Airlines', '8 hours 45 minutes', '6200'),
(24, 'Dhaka (DAC)', 'Paris (CDG)', '2023-08-01', '13:45:00', '2023-08-01', '19:30:00', 'Emirates', '5 hours 45 minutes', '4850'),
(25, 'Dhaka (DAC)', 'Amsterdam (AMS)', '2023-08-05', '08:15:00', '2023-08-05', '15:45:00', 'KLM Royal Dutch Airlines', '10 hours 30 minutes', '5480'),
(26, 'Dhaka (DAC)', 'Frankfurt (FRA)', '2023-08-07', '09:30:00', '2023-08-07', '16:15:00', 'Lufthansa', '9 hours 45 minutes', '5220'),
(27, 'Dhaka (DAC)', 'Singapore (SIN)', '2023-08-10', '11:45:00', '2023-08-10', '19:30:00', 'Singapore Airlines', '5 hours 45 minutes', '4690'),
(28, 'Dhaka (DAC)', 'Tokyo (HND)', '2023-08-15', '13:00:00', '2023-08-15', '22:15:00', 'Japan Airlines', '10 hours 15 minutes', '6050'),
(29, 'Dhaka (DAC)', 'Beijing (PEK)', '2023-08-20', '14:30:00', '2023-08-20', '22:45:00', 'Air China', '7 hours 15 minutes', '5280'),
(30, 'Dhaka (DAC)', 'Istanbul (IST)', '2023-08-25', '16:45:00', '2023-08-26', '01:30:00', 'Turkish Airlines', '9 hours 45 minutes', '5870'),
(31, 'Dhaka (DAC)', 'Dubai (DXB)', '2023-08-30', '18:00:00', '2023-08-31', '01:30:00', 'Emirates', '5 hours 30 minutes', '4620'),
(32, 'Dhaka (DAC)', 'Sydney (SYD)', '2023-09-05', '20:15:00', '2023-09-06', '09:30:00', 'Qantas Airways', '11 hours 15 minutes', '6940'),
(33, 'Dhaka (DAC)', 'Melbourne (MEL)', '2023-09-10', '22:30:00', '2023-09-11', '10:45:00', 'Singapore Airlines', '12 hours 15 minutes', '6850'),
(34, 'Dhaka (DAC)', 'Hong Kong (HKG)', '2023-09-15', '23:45:00', '2023-09-16', '08:30:00', 'Cathay Pacific Airways', '4 hours 45 minutes', '4960'),
(35, 'New York (JFK)', 'London (LHR)', '2023-08-05', '08:45:00', '2023-08-05', '20:30:00', 'British Airways', '7 hours 45 minutes', '8990'),
(36, 'New York (JFK)', 'Paris (CDG)', '2023-08-07', '10:30:00', '2023-08-07', '22:15:00', 'Air France', '8 hours 45 minutes', '9750'),
(37, 'New York (JFK)', 'Amsterdam (AMS)', '2023-08-10', '12:15:00', '2023-08-10', '23:45:00', 'KLM Royal Dutch Airlines', '7 hours 30 minutes', '9450'),
(38, 'New York (JFK)', 'Frankfurt (FRA)', '2023-08-15', '14:00:00', '2023-08-15', '23:30:00', 'Lufthansa', '7 hours 30 minutes', '9250'),
(39, 'New York (JFK)', 'Singapore (SIN)', '2023-08-20', '16:45:00', '2023-08-21', '06:15:00', 'Singapore Airlines', '18 hours 30 minutes', '2560'),
(40, 'New York (JFK)', 'Tokyo (HND)', '2023-08-25', '18:30:00', '2023-08-26', '08:45:00', 'Japan Airlines', '14 hours 15 minutes', '2130'),
(41, 'New York (JFK)', 'Los Angeles (LAX)', '2023-08-30', '20:15:00', '2023-08-31', '00:30:00', 'American Airlines', '5 hours 15 minutes', '3350'),
(42, 'New York (JFK)', 'Miami (MIA)', '2023-09-05', '22:00:00', '2023-09-06', '01:30:00', 'Delta Air Lines', '3 hours 30 minutes', '4700'),
(43, 'New York (JFK)', 'San Francisco (SFO)', '2023-09-10', '00:30:00', '2023-09-10', '04:45:00', 'United Airlines', '6 hours 15 minutes', '4200'),
(44, 'New York (JFK)', 'Las Vegas (LAS)', '2023-09-15', '02:15:00', '2023-09-15', '05:30:00', 'JetBlue Airways', '5 hours 15 minutes', '3150'),
(45, 'Abu Dhabi International (AUH)', 'London (LHR)', '2023-08-05', '08:45:00', '2023-08-05', '20:30:00', 'British Airways', '7 hours 45 minutes', '8990'),
(46, 'Abu Dhabi International (AUH)', 'Paris (CDG)', '2023-08-07', '10:30:00', '2023-08-07', '22:15:00', 'Air France', '8 hours 45 minutes', '9750'),
(47, 'Abu Dhabi International (AUH)', 'Amsterdam (AMS)', '2023-08-10', '12:15:00', '2023-08-10', '23:45:00', 'KLM Royal Dutch Airlines', '7 hours 30 minutes', '9450'),
(48, 'Abu Dhabi International (AUH)', 'Frankfurt (FRA)', '2023-08-15', '14:00:00', '2023-08-15', '23:30:00', 'Lufthansa', '7 hours 30 minutes', '9250'),
(49, 'Abu Dhabi International (AUH)', 'Singapore (SIN)', '2023-08-20', '16:45:00', '2023-08-21', '06:15:00', 'Singapore Airlines', '18 hours 30 minutes', '2560'),
(50, 'Abu Dhabi International (AUH)', 'Tokyo (HND)', '2023-08-25', '18:30:00', '2023-08-26', '08:45:00', 'Japan Airlines', '14 hours 15 minutes', '2130'),
(51, 'Abu Dhabi International (AUH)', 'Los Angeles (LAX)', '2023-08-30', '20:15:00', '2023-08-31', '00:30:00', 'American Airlines', '5 hours 15 minutes', '3350'),
(52, 'Abu Dhabi International (AUH)', 'Miami (MIA)', '2023-09-05', '22:00:00', '2023-09-06', '01:30:00', 'Delta Air Lines', '3 hours 30 minutes', '4700'),
(53, 'Abu Dhabi International (AUH)', 'San Francisco (SFO)', '2023-09-10', '00:30:00', '2023-09-10', '04:45:00', 'United Airlines', '6 hours 15 minutes', '4200'),
(54, 'Abu Dhabi International (AUH)', 'Las Vegas (LAS)', '2023-09-15', '02:15:00', '2023-09-15', '05:30:00', 'JetBlue Airways', '5 hours 15 minutes', '3150'),
(55, 'Amsterdam (AMS)', 'London (LHR)', '2023-08-05', '08:45:00', '2023-08-05', '20:30:00', 'British Airways', '7 hours 45 minutes', '8990'),
(56, 'Amsterdam (AMS)', 'Paris (CDG)', '2023-08-07', '10:30:00', '2023-08-07', '22:15:00', 'Air France', '8 hours 45 minutes', '9750'),
(57, 'Amsterdam (AMS)', 'Abu Dhabi International (AUH)', '2023-08-10', '12:15:00', '2023-08-10', '23:45:00', 'KLM Royal Dutch Airlines', '7 hours 30 minutes', '9450'),
(58, 'Amsterdam (AMS)', 'Frankfurt (FRA)', '2023-08-15', '14:00:00', '2023-08-15', '23:30:00', 'Lufthansa', '7 hours 30 minutes', '9250'),
(59, 'Amsterdam (AMS)', 'Singapore (SIN)', '2023-08-20', '16:45:00', '2023-08-21', '06:15:00', 'Singapore Airlines', '18 hours 30 minutes', '2560'),
(60, 'Amsterdam (AMS)', 'Tokyo (HND)', '2023-08-25', '18:30:00', '2023-08-26', '08:45:00', 'Japan Airlines', '14 hours 15 minutes', '2130'),
(61, 'Amsterdam (AMS)', 'Los Angeles (LAX)', '2023-08-30', '20:15:00', '2023-08-31', '00:30:00', 'American Airlines', '5 hours 15 minutes', '3350'),
(62, 'Amsterdam (AMS)', 'Miami (MIA)', '2023-09-05', '22:00:00', '2023-09-06', '01:30:00', 'Delta Air Lines', '3 hours 30 minutes', '4700'),
(63, 'Amsterdam (AMS)', 'San Francisco (SFO)', '2023-09-10', '00:30:00', '2023-09-10', '04:45:00', 'United Airlines', '6 hours 15 minutes', '4200'),
(64, 'Amsterdam (AMS)', 'Las Vegas (LAS)', '2023-09-15', '02:15:00', '2023-09-15', '05:30:00', 'JetBlue Airways', '5 hours 15 minutes', '3150');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `rating` int(255) NOT NULL,
  `price` double NOT NULL,
  `location` text NOT NULL,
  `city` text NOT NULL,
  `image` text NOT NULL,
  `roomtype` int(255) NOT NULL,
  `reserve` int(255) NOT NULL,
  `free` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `description`, `rating`, `price`, `location`, `city`, `image`, `roomtype`, `reserve`, `free`) VALUES
(1, 'Copley Square Hotel', 'Situated in the heart of Copley Square, one of Boston\'s most iconic neighborhoods, this premier hotel offers elegant accommodations with stunning views of the city.', 5, 19900, 'Boston, United States', 'Boston\r', 'copley-square-hotel.jpg', 3, 4, 3),
(2, 'Hotel Le Meurice', 'Located in the heart of Paris, Hotel Le Meurice offers luxurious accommodations with stunning views of the city.', 5, 10800, 'Paris, France', 'Paris\r', 'hotel-le-meurice.jpg', 4, 2, 4),
(3, 'Hôtel Barrière Le Majestic Cannes', 'Located on the glamorous French Riviera in Cannes, Hôtel Barrière Le Majestic offers a luxurious and enchanting experience with breathtaking views of the Mediterranean Sea.', 4, 23200, 'Cannes, France', 'Cannes\r', 'hotel-barriere-le-majestic-cannes.jpg', 6, 1, 2),
(4, 'The Ritz London', 'Situated in the heart of London, The Ritz is a legendary and iconic hotel known for its timeless elegance and exceptional service.', 5, 21600, 'London, United Kingdom', 'London\r', 'the-ritz-london.jpg', 9, 4, 3),
(5, 'The Langham, London', 'Located in the vibrant city of London, The Langham offers luxurious accommodations with a perfect blend of classic charm and contemporary sophistication.', 4, 10800, 'London, United Kingdom', 'London\r', 'the-langham-london.jpg', 4, 5, 2),
(6, 'Hotel Danieli', 'Nestled in the romantic city of Venice, Hotel Danieli showcases exquisite Venetian architecture and offers guests a truly enchanting experience.', 5, 14400, 'Venice, Italy', 'Venice\r', 'hotel-danieli.jpg', 5, 8, 3),
(7, 'The Plaza Hotel', 'Situated in the bustling city of New York, The Plaza Hotel is a historic landmark known for its grandeur and impeccable service, providing guests with an unforgettable stay.', 5, 28800, 'New York City, United States', 'New York City\r', 'the-plaza-hotel.jpg', 3, 6, 2),
(8, 'The Beverly Hills Hotel', 'Set in the glamorous neighborhood of Beverly Hills, this iconic hotel exudes timeless Hollywood glamour and offers a luxurious retreat for discerning travelers.', 4, 21600, 'Los Angeles, United States', 'Los Angeles\r', 'the-beverly-hills-hotel.jpg', 9, 5, 2),
(9, 'Aman Tokyo', 'Overlooking the bustling cityscape of Tokyo, Aman Tokyo offers a serene and minimalist retreat, combining traditional Japanese aesthetics with modern luxury.', 5, 28800, 'Tokyo, Japan', 'Tokyo\r', 'aman-tokyo.jpg', 3, 5, 1),
(10, 'Hoshinoya Tokyo', 'Hidden away in the heart of Tokyo, Hoshinoya Tokyo is a tranquil oasis where guests can experience traditional Japanese hospitality in a contemporary setting.', 4, 18000, 'Tokyo, Japan', 'Tokyo\r', 'hoshinoya-tokyo.jpg', 6, 3, 1),
(11, 'Hotel Arts Barcelona', 'Located on the stunning waterfront of Barcelona, Hotel Arts offers breathtaking views of the Mediterranean Sea and combines modern design with world-class amenities.', 5, 25200, 'Barcelona, Spain', 'Barcelona\r', 'hotel-arts-barcelona.jpg', 3, 4, 2),
(12, 'Qualia', 'Situated in the picturesque Hamilton Island in Australia\'s Great Barrier Reef, Qualia is a luxurious resort that offers guests a secluded and indulgent escape in a tropical paradise.', 5, 36000, 'Hamilton Island, Australia', 'Hamilton Island\r', 'qualia.jpg', 5, 9, 2),
(13, 'Park Hyatt Sydney', 'Set against the iconic backdrop of Sydney Harbour, Park Hyatt Sydney boasts unparalleled views of the Sydney Opera House and provides guests with a luxurious waterfront experience.', 4, 28800, 'Sydney, Australia', 'Sydney\r', 'park-hyatt-sydney.jpg', 6, 10, 3),
(14, 'Four Seasons Hotel Cairo at Nile Plaza', 'Overlooking the Nile River, Four Seasons Hotel Cairo at Nile Plaza offers elegant accommodations and exceptional service in the heart of Egypt\'s bustling capital.', 5, 21600, 'Cairo, Egypt', 'Cairo\r', 'four-seasons-hotel-cairo.jpg', 5, 5, 4),
(15, 'Mena House, Cairo', 'Nestled at the foot of the Great Pyramids of Giza, Mena House is a historic hotel that offers a unique blend of traditional Egyptian charm and modern comforts.', 4, 14400, 'Cairo, Egypt', 'Cairo\r', 'mena-house-cairo.jpg', 4, 2, 2),
(16, 'Copacabana Palace', 'Located on Rio de Janeiro\'s famous Copacabana Beach, Copacabana Palace is a glamorous hotel that has been welcoming guests for decades, offering luxurious accommodations and breathtaking views of the coastline.', 5, 25200, 'Rio de Janeiro, Brazil', 'Rio de Janeiro\r', 'copacabana-palace.jpg', 6, 3, 3),
(17, 'Pan Pacific Sonargaon Dhaka', 'Located in the heart of Dhaka city, Pan Pacific Sonargaon Dhaka offers luxurious accommodations with modern amenities.', 5, 9000, 'Dhaka, Bangladesh', 'Dhaka\r', 'panpacific.jpg', 5, 4, 2),
(18, 'The Westin Dhaka', 'Experience luxury and comfort at The Westin Dhaka, offering elegant rooms and a range of amenities for a delightful stay.', 4, 7920, 'Dhaka, Bangladesh', 'Dhaka\r', 'westin.jpg', 6, 6, 2),
(19, 'Radisson Blu Chattogram Bay View', 'Enjoy stunning views of Chattogram Bay from the Radisson Blu Chattogram Bay View hotel, offering comfortable rooms and top-notch services.', 4, 6840, 'Chattogram, Bangladesh', 'Chattogram\r', 'radisson.jpg', 4, 8, 1),
(20, 'Amari Dhaka', 'Discover a blend of contemporary design and traditional hospitality at Amari Dhaka, offering stylish rooms and personalized service.', 4, 7560, 'Dhaka, Bangladesh', 'Dhaka\r', 'amari.jpg', 4, 8, 1),
(21, 'The Peninsula Chittagong', 'Experience luxury and sophistication at The Peninsula Chittagong, offering spacious rooms and panoramic views of the city.', 4, 6480, 'Chittagong, Bangladesh', 'Chittagong\r', 'peninsula.jpg', 6, 2, 3),
(22, 'Six Seasons Hotel', 'Indulge in luxury at Six Seasons Hotel, offering modern rooms, exquisite dining options, and a rooftop swimming pool.', 5, 9720, 'Dhaka, Bangladesh', 'Dhaka\r', 'sixseasons.jpg', 5, 1, 2),
(23, 'The Way Dhaka', 'Experience warm hospitality and comfort at The Way Dhaka, offering stylish rooms and a range of amenities for a pleasant stay.', 4, 8280, 'Dhaka, Bangladesh', 'Dhaka\r', 'theway.jpg', 6, 3, 4),
(24, 'Ruposhi Bangla Hotel', 'Experience the grandeur of Ruposhi Bangla Hotel, offering spacious rooms, fine dining options, and a luxurious ambiance.', 4, 9360, 'Dhaka, Bangladesh', 'Dhaka\r', 'ruposhi.jpg', 4, 4, 1),
(25, 'Hotel Agrabad', 'Enjoy a comfortable stay at Hotel Agrabad, offering modern rooms, delicious cuisine, and convenient access to popular attractions.', 4, 7200, 'Chattogram, Bangladesh', 'Chattogram\r', 'agrabad.jpg', 9, 5, 2),
(26, 'Lakeshore Hotel and Apartments', 'Relax and unwind at Lakeshore Hotel and Apartments, offering comfortable accommodations and serene lake views.', 4, 7920, 'Dhaka, Bangladesh', 'Dhaka', 'lakeshore.jpg', 6, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotelbook`
--

CREATE TABLE `hotelbook` (
  `id` int(255) NOT NULL,
  `hotelname` varchar(255) DEFAULT NULL,
  `roomname` varchar(255) DEFAULT NULL,
  `location` text,
  `sleep` text,
  `size` int(255) DEFAULT NULL,
  `bed` int(255) NOT NULL,
  `fare` int(255) DEFAULT NULL,
  `sertax` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `orderid` text NOT NULL,
  `invoiceid` text NOT NULL,
  `invoicedate` date NOT NULL,
  `first` text NOT NULL,
  `last` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` text NOT NULL,
  `adultno` int(255) NOT NULL,
  `childno` int(255) NOT NULL,
  `paytype` text NOT NULL,
  `ccname` text NOT NULL,
  `ccnumber` text NOT NULL,
  `ccexpiration` text NOT NULL,
  `ccv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelbook`
--

INSERT INTO `hotelbook` (`id`, `hotelname`, `roomname`, `location`, `sleep`, `size`, `bed`, `fare`, `sertax`, `total`, `orderid`, `invoiceid`, `invoicedate`, `first`, `last`, `username`, `address`, `email`, `cell`, `adultno`, `childno`, `paytype`, `ccname`, `ccnumber`, `ccexpiration`, `ccv`) VALUES
(1, 'Hôtel Barrière Le Majestic Cannes', 'Superior Twin Room', 'Cannes, France', '4', 24, 2, 23200, 5568, 61248, 'ORDTMS153', 'TMSINV153', '2023-07-14', 'name', 'last', 'usr', 'fghjk', 'emai@t.com', '456789', 1, 1, 'Debit card', 'dfcgvbn', '34567', '4/26', '345'),
(2, 'Hôtel Barrière Le Majestic Cannes', 'Superior Twin Room', 'Cannes, France', '4', 24, 2, 23200, 5568, 61248, 'ORDTMS314', 'TMSINV314', '2023-07-14', 'name', 'last', 'usr', 'fghjk', 'emai@t.com', '456789', 1, 1, 'Debit card', 'dfcgvbn', '34567', '4/26', '345');

-- --------------------------------------------------------

--
-- Table structure for table `hotelroom`
--

CREATE TABLE `hotelroom` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `size` int(255) NOT NULL,
  `sleep` int(255) NOT NULL,
  `bed` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotelroom`
--

INSERT INTO `hotelroom` (`id`, `name`, `description`, `size`, `sleep`, `bed`) VALUES
(1, 'Superior Twin Room', '', 24, 4, 2),
(2, 'Deluxe Twin Room, 2 Twin Beds', '', 27, 4, 2),
(3, 'Executive Twin Room', '', 29, 4, 2),
(4, 'Junior Suite, 1 Bedroom', '', 32, 2, 1),
(5, 'Junior Suite, 1 Bedroom', '', 34, 2, 1),
(6, 'Couple Bedroom Suite', '', 45, 2, 2),
(7, 'Luxury Suite, 1 Bedroom, Balcony, City View', '', 65, 4, 2),
(8, 'Deluxe Double Room, 1 King Bed', '', 36, 2, 2),
(9, 'Superior Room', '', 40, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE `Locations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Locations`
--

INSERT INTO `Locations` (`id`, `name`, `country`) VALUES
(1, 'Paris', 'France'),
(2, 'London', 'United Kingdom'),
(3, 'Rome', 'Italy'),
(4, 'New York City', 'United States'),
(5, 'Tokyo', 'Japan'),
(6, 'Barcelona', 'Spain'),
(7, 'Sydney', 'Australia'),
(8, 'Cairo', 'Egypt'),
(9, 'Rio de Janeiro', 'Brazil'),
(10, 'Cape Town', 'South Africa'),
(11, 'Amsterdam', 'Netherlands'),
(12, 'Dubai', 'United Arab Emirates'),
(13, 'Berlin', 'Germany'),
(14, 'Bangkok', 'Thailand'),
(15, 'Istanbul', 'Turkey'),
(16, 'Moscow', 'Russia'),
(17, 'Los Angeles', 'United States'),
(18, 'Mumbai', 'India'),
(19, 'Toronto', 'Canada'),
(20, 'Athens', 'Greece'),
(21, 'Prague', 'Czech Republic'),
(22, 'Florence', 'Italy'),
(23, 'Seoul', 'South Korea'),
(24, 'Vienna', 'Austria'),
(25, 'San Francisco', 'United States'),
(26, 'Buenos Aires', 'Argentina'),
(27, 'Singapore', 'Singapore'),
(28, 'Edinburgh', 'United Kingdom'),
(29, 'Zurich', 'Switzerland'),
(30, 'Stockholm', 'Sweden'),
(31, 'Dublin', 'Ireland'),
(32, 'Havana', 'Cuba'),
(33, 'Lisbon', 'Portugal'),
(34, 'Reykjavik', 'Iceland'),
(35, 'Helsinki', 'Finland'),
(36, 'Mexico City', 'Mexico'),
(37, 'Beijing', 'China'),
(38, 'Copenhagen', 'Denmark'),
(39, 'Venice', 'Italy'),
(40, 'Melbourne', 'Australia'),
(41, 'Amman', 'Jordan'),
(42, 'Nairobi', 'Kenya'),
(43, 'Budapest', 'Hungary'),
(44, 'Marrakech', 'Morocco'),
(45, 'São Paulo', 'Brazil'),
(46, 'Krakow', 'Poland'),
(47, 'Jerusalem', 'Israel'),
(48, 'Cusco', 'Peru'),
(49, 'Vancouver', 'Canada'),
(50, 'Beirut', 'Lebanon'),
(51, 'Lima', 'Peru'),
(52, 'Oslo', 'Norway'),
(53, 'Wellington', 'New Zealand'),
(54, 'Kuala Lumpur', 'Malaysia'),
(55, 'Cape Town', 'South Africa'),
(56, 'Seville', 'Spain'),
(57, 'Washington, D.C.', 'United States'),
(58, 'Halls Gap', 'Australia'),
(59, 'Machu Picchu', 'Peru'),
(60, 'Santorini', 'Greece'),
(61, 'Cairns', 'Australia'),
(62, 'Montana', 'United States'),
(63, 'Petra', 'Jordan'),
(64, 'Chichen Itza', 'Mexico'),
(65, 'Hoi An', 'Vietnam'),
(66, 'Bora Bora', 'French Polynesia'),
(67, 'Puerto Iguazú', 'Argentina'),
(68, 'Angkor Wat', 'Cambodia'),
(69, 'Agra', 'India'),
(70, 'Arizona', 'United States'),
(71, 'Dubrovnik', 'Croatia'),
(72, 'Tarragona', 'Spain'),
(73, 'Namche Bazaar', 'Nepal'),
(74, 'Milan', 'Italy'),
(75, 'Jiayuguan', 'China'),
(76, 'Marseille', 'France'),
(77, 'Madrid', 'Spain'),
(78, 'Luxor', 'Egypt'),
(79, 'Chicago', 'United States'),
(80, 'Canberra', 'Australia'),
(81, 'Corfu', 'Greece'),
(82, 'Granada', 'Spain'),
(83, 'Nice', 'France'),
(84, 'Jaipur', 'India'),
(85, 'Cairns', 'Australia'),
(86, 'Arusha', 'Tanzania'),
(87, 'Galápagos Islands', 'Ecuador'),
(88, 'Manaus', 'Brazil'),
(89, 'Tromso', 'Norway'),
(90, 'Marrakech', 'Morocco'),
(91, 'Zermatt', 'Switzerland'),
(92, 'Malé', 'Maldives'),
(93, 'Santorini', 'Greece'),
(94, 'Positano', 'Italy'),
(95, 'Monterosso', 'Italy'),
(96, 'Banff', 'Canada'),
(97, 'Apollo Bay', 'Australia'),
(98, 'Livingstone', 'Zambia'),
(99, 'Honolulu', 'United States'),
(100, 'Hamilton Island', 'Australia'),
(101, 'Barguna', 'Bangladesh'),
(102, 'Barisal', 'Bangladesh'),
(103, 'Bhola', 'Bangladesh'),
(104, 'Jhalokati', 'Bangladesh'),
(105, 'Patuakhali', 'Bangladesh'),
(106, 'Pirojpur', 'Bangladesh'),
(107, 'Bandarban', 'Bangladesh'),
(108, 'Brahmanbaria', 'Bangladesh'),
(109, 'Chandpur', 'Bangladesh'),
(110, 'Chittagong', 'Bangladesh'),
(111, 'Comilla', 'Bangladesh'),
(112, 'Cox\'s Bazar', 'Bangladesh'),
(113, 'Feni', 'Bangladesh'),
(114, 'Khagrachhari', 'Bangladesh'),
(115, 'Lakshmipur', 'Bangladesh'),
(116, 'Noakhali', 'Bangladesh'),
(117, 'Rangamati', 'Bangladesh'),
(118, 'Dhaka', 'Bangladesh'),
(119, 'Faridpur', 'Bangladesh'),
(120, 'Gazipur', 'Bangladesh'),
(121, 'Gopalganj', 'Bangladesh'),
(122, 'Kishoreganj', 'Bangladesh'),
(123, 'Madaripur', 'Bangladesh'),
(124, 'Manikganj', 'Bangladesh'),
(125, 'Munshiganj', 'Bangladesh'),
(126, 'Narayanganj', 'Bangladesh'),
(127, 'Narsingdi', 'Bangladesh'),
(128, 'Rajbari', 'Bangladesh'),
(129, 'Shariatpur', 'Bangladesh'),
(130, 'Tangail', 'Bangladesh'),
(131, 'Bagerhat', 'Bangladesh'),
(132, 'Chuadanga', 'Bangladesh'),
(133, 'Jessore', 'Bangladesh'),
(134, 'Jhenaidah', 'Bangladesh'),
(135, 'Khulna', 'Bangladesh'),
(136, 'Kushtia', 'Bangladesh'),
(137, 'Magura', 'Bangladesh'),
(138, 'Meherpur', 'Bangladesh'),
(139, 'Narail', 'Bangladesh'),
(140, 'Satkhira', 'Bangladesh'),
(141, 'Jamalpur', 'Bangladesh'),
(142, 'Mymensingh', 'Bangladesh'),
(143, 'Netrokona', 'Bangladesh'),
(144, 'Sherpur', 'Bangladesh'),
(145, 'Bogra', 'Bangladesh'),
(146, 'Joypurhat', 'Bangladesh'),
(147, 'Naogaon', 'Bangladesh'),
(148, 'Natore', 'Bangladesh'),
(149, 'Chapai Nawabganj', 'Bangladesh'),
(150, 'Pabna', 'Bangladesh'),
(151, 'Rajshahi', 'Bangladesh'),
(152, 'Sirajganj', 'Bangladesh'),
(153, 'Dinajpur', 'Bangladesh'),
(154, 'Gaibandha', 'Bangladesh'),
(155, 'Kurigram', 'Bangladesh'),
(156, 'Lalmonirhat', 'Bangladesh'),
(157, 'Nilphamari', 'Bangladesh'),
(158, 'Panchagarh', 'Bangladesh'),
(159, 'Rangpur', 'Bangladesh'),
(160, 'Thakurgaon', 'Bangladesh'),
(161, 'Habiganj', 'Bangladesh'),
(162, 'Moulvibazar', 'Bangladesh'),
(163, 'Sunamganj', 'Bangladesh'),
(164, 'Sylhet', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `title` text NOT NULL,
  `datetime` int(11) NOT NULL,
  `destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_name`, `first`, `last`, `email`, `user_rating`, `user_review`, `title`, `datetime`, `destination`) VALUES
(1, 'John', '', '', '', 4, 'Nice Product, Value for money', '', 1621935691, 'Eiffel Tower'),
(2, 'Peter', '', '', '', 5, 'Nice Product with Good Feature.', '', 1621939888, 'Notre-Dame Cathedral'),
(3, 'Donna', '', '', '', 1, 'Worst Product, lost my money.', '', 1621940010, 'Champs-Élysées'),
(4, 'Peter', '', '', '', 5, 'Nice Product with Good Feature.', '', 1687860218, 'Senso-ji Temple'),
(5, 'Parker', '', '', '', 5, 'Nice Product with Good Feature.', '', 1687865965, 'Eiffel Tower'),
(6, 'test', '', '', '', 5, 'Nice Product with Good Feature.', '', 1687865978, 'Champs-Élysées'),
(7, 'Smith', '', '', '', 1, 'Nice Product with Good Feature.', '', 1687869623, 'Big Ben'),
(8, 'Parker', '', '', '', 1, 'Nice Product with Good Feature.', '', 1687869866, 'Tower of London'),
(9, 'Smith', '', '', '', 3, 'Nice Product with Good Feature.', '', 1687870391, 'Champs-Élysées'),
(10, 'test', '', '', '', 2, 'Nice Product with Good Feature.', '', 1687878451, 'Eiffel Tower'),
(11, 'Hubber', '', '', '', 5, 'Nice Product with Good Feature.', '', 1687878560, 'Tower of London'),
(12, 'John', '', '', '', 2, 'Nice Product with Good Feature.', '', 1687878581, 'Big Ben'),
(13, 'test', '', '', '', 3, 'Nice Product with Good Feature.', '', 1687878711, 'Senso-ji Temple'),
(14, 'Parker', '', '', '', 1, 'Worst Product, lost my money.', '', 1687879067, 'Tower of London'),
(15, 'Smith', '', '', '', 5, 'Worst Product, lost my money.', '', 1687879072, 'Big Ben'),
(16, 'test', '', '', '', 4, 'Worst Product, lost my money.', '', 1687879108, 'Pantheon'),
(17, 'test', '', '', '', 5, 'Worst Product, lost my money.', '', 1687879280, 'Eiffel Tower'),
(18, 'Peter', '', '', '', 5, 'Worst Product, lost my money.', '', 1687879291, 'Senso-ji Temple'),
(19, 'Smith', '', '', '', 5, 'Worst Product, lost my money.', '', 1687880211, 'Eiffel Tower'),
(20, 'test', '', '', '', 4, 'Worst Product, lost my money.', '', 1687880977, 'Montmartre'),
(21, 'Smith', '', '', '', 5, 'Worst Product, lost my money.', '', 1687882078, 'Big Ben'),
(22, 'test', '', '', '', 5, 'Worst Product, lost my money.', '', 1687882192, 'Tower of London'),
(23, 'Donna', '', '', '', 5, 'Worst Product, lost my money.', '', 1687884053, 'Big Ben'),
(24, 'Smith', '', '', '', 5, 'Worst Product, lost my money.', '', 1687884153, 'Eiffel Tower'),
(25, 'Donna', '', '', '', 5, 'Worst Product, lost my money.', '', 1688569437, 'Montmartre'),
(26, 'test', '', '', '', 5, 'Worst Product, lost my money.', '', 1688575292, 'Senso-ji Temple'),
(27, 'test', 'First', 'Last', 'Test', 4, 'Test', 'Test', 1688742406, 'Eiffel Tower'),
(28, 'User', 'First', 'Last', 'Test', 4, 'Test', 'title', 1688744540, 'Eiffel Tower'),
(29, 'User', 'First', 'Last', 'Test', 4, 'Test', 'title', 1688744621, 'Eiffel Tower'),
(30, 'User', 'First', 'Last', 'Test', 5, 'Test', 'title', 1688744634, 'Eiffel Tower'),
(31, 'User', 'First', 'Last', 'Test', 5, 'Test', 'title', 1688744638, 'Eiffel Tower'),
(32, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 4, 'Testy', 'Yoo', 1688744943, 'Eiffel Tower'),
(33, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 4, 'Testy', 'Yoo', 1688745409, 'Eiffel Tower'),
(34, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 4, 'Testy', 'Yoo', 1688745719, 'Eiffel Tower'),
(35, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 3, 'Testy', 'Yoo', 1688746241, 'Eiffel Tower'),
(36, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 3, 'Testy', 'Yoo', 1688746295, 'Eiffel Tower'),
(37, 'Pijus', 'Pijus', 'Mojumdar', 'Testy', 3, 'Testy', 'Yoo', 1688746311, 'Eiffel Tower'),
(38, 'woliul', 'First', 'last', 'Test', 3, 'Test', 'Test Title', 1688754634, 'Eiffel Tower'),
(39, 'rahmat', 'Rahamat', 'Hossain', 'Test', 3, 'Test', 'Test Title', 1688755415, 'Eiffel Tower'),
(40, 'woliul', 'Woliul', 'Hasan', 'Best place to visit in India', 5, 'Best place to visit in India', 'Best Place', 1688917028, 'Tomb of Itimad-ud-Daulah'),
(41, 'JohnDoe', 'John', 'Doe', 'johndoe@example.com', 5, 'I was amazed by the stunning views!', 'Amazing Experience', 1669576200, 'Eiffel Tower'),
(42, 'John Smith', 'John', 'Smith', 'johndoe@example.com', 5, 'I was amazed by the stunning views!', 'Amazing Experience', 1669576200, 'Eiffel Tower'),
(43, 'Emily Johnson', 'Emily', 'Johnson', 'emilyjohnson@example.com', 5, 'A wonderful place to visit!', 'Great Experience', 1669576200, 'Louvre Museum'),
(44, 'Michael Brown', 'Michael', 'Brown', 'michaelbrown@example.com', 4, 'The historical significance is mind-blowing!', 'Impressive Landmark', 1669576200, 'Notre-Dame Cathedral'),
(45, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'A delightful neighborhood with great atmosphere!', 'Charming District', 1669576200, 'Montmartre'),
(46, 'William Wilson', 'William', 'Wilson', 'williamwilson@example.com', 5, 'A picturesque cruise with stunning views!', 'Scenic River Experience', 1669576200, 'Seine River Cruise'),
(47, 'Sophia Thompson', 'Sophia', 'Thompson', 'sophiathompson@example.com', 5, 'An iconic avenue with great shopping and dining options!', 'Vibrant Atmosphere', 1669576200, 'Champs-Élysées'),
(48, 'James Taylor', 'James', 'Taylor', 'jamestaylor@example.com', 4, 'A symbol of London and its rich history!', 'Historical Landmark', 1669576200, 'Big Ben'),
(49, 'Charlotte Evans', 'Charlotte', 'Evans', 'charlotteevans@example.com', 5, 'A must-visit for its fascinating history!', 'Historical Fortress', 1669576200, 'Tower of London'),
(50, 'Daniel Anderson', 'Daniel', 'Anderson', 'danielanderson@example.com', 5, 'A royal residence that exudes grandeur!', 'Regal Palace', 1669576200, 'Buckingham Palace'),
(51, 'Amelia Martinez', 'Amelia', 'Martinez', 'ameliacmartinez@example.com', 4, 'A treasure trove of historical artifacts!', 'Fascinating Museum', 1669576200, 'British Museum'),
(52, 'Oliver Wilson', 'Oliver', 'Wilson', 'oliverwilson@example.com', 5, 'An iconic symbol of London!', 'Iconic Landmark', 1669576200, 'Tower Bridge'),
(53, 'Mia Thompson', 'Mia', 'Thompson', 'miathompson@example.com', 5, 'A treasure trove of knowledge!', 'Literary Haven', 1669576200, 'The British Library'),
(54, 'Henry Davis', 'Henry', 'Davis', 'henrydavis@example.com', 5, 'A magnificent ancient amphitheater!', 'Historical Icon', 1669576200, 'Colosseum'),
(55, 'Ella Martinez', 'Ella', 'Martinez', 'ellamartinez@example.com', 5, 'A spiritual and artistic hub!', 'Spiritual Enclave', 1669576200, 'Vatican City'),
(56, 'Liam Wilson', 'Liam', 'Wilson', 'liamwilson@example.com', 5, 'A mesmerizing fountain!', 'Iconic Landmark', 1669576200, 'Trevi Fountain'),
(57, 'Ava Thompson', 'Ava', 'Thompson', 'avathompson@example.com', 4, 'An ancient Roman temple with architectural splendor!', 'Historical Marvel', 1669576200, 'Pantheon'),
(58, 'Noah Davis', 'Noah', 'Davis', 'noahdavis@example.com', 5, 'A fascinating glimpse into ancient Roman life!', 'Historical Site', 1669576200, 'Roman Forum'),
(59, 'Isabella Wilson', 'Isabella', 'Wilson', 'isabellawilson@example.com', 5, 'An awe-inspiring masterpiece of art!', 'Artistic Marvel', 1669576200, 'Sistine Chapel'),
(60, 'Mason Thompson', 'Mason', 'Thompson', 'masonthompson@example.com', 5, 'A symbol of freedom and hope!', 'Iconic Landmark', 1669576200, 'Statue of Liberty'),
(61, 'John Smith', 'John', 'Smith', 'johndoe@example.com', 5, 'I enjoyed a picturesque cruise along the Seine River!', 'Beautiful River Cruise', 1669576200, 'Seine River Cruise'),
(62, 'Emily Johnson', 'Emily', 'Johnson', 'emilyjohnson@example.com', 5, 'Walking down the Champs-Élysées was a dream come true!', 'Iconic Avenue', 1669576200, 'Champs-Élysées'),
(63, 'Michael Brown', 'Michael', 'Brown', 'michaelbrown@example.com', 4, 'Big Ben is even more impressive in person!', 'Iconic Clock Tower', 1669576200, 'Big Ben'),
(64, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'The history and stories of the Tower of London are fascinating!', 'Historic Landmark', 1669576200, 'Tower of London'),
(65, 'William Wilson', 'William', 'Wilson', 'williamwilson@example.com', 4, 'Buckingham Palace is an architectural masterpiece!', 'Royal Residence', 1669576200, 'Buckingham Palace'),
(66, 'Sophia Thompson', 'Sophia', 'Thompson', 'sophiathompson@example.com', 5, 'The British Museum has an incredible collection!', 'World-Class Museum', 1669576200, 'British Museum'),
(67, 'James Taylor', 'James', 'Taylor', 'jamestaylor@example.com', 5, 'The Tower Bridge offers spectacular views of the River Thames!', 'Iconic Bridge', 1669576200, 'Tower Bridge'),
(68, 'Charlotte Evans', 'Charlotte', 'Evans', 'charlotteevans@example.com', 4, 'The British Library is a paradise for book lovers!', 'Impressive Library', 1669576200, 'The British Library'),
(69, 'Daniel Anderson', 'Daniel', 'Anderson', 'danielanderson@example.com', 5, 'The Colosseum is an architectural marvel!', 'Ancient Amphitheater', 1669576200, 'Colosseum'),
(70, 'Amelia Martinez', 'Amelia', 'Martinez', 'ameliamartinez@example.com', 5, 'Visiting Vatican City was a spiritually enriching experience!', 'Sacred Destination', 1669576200, 'Vatican City'),
(71, 'John Smith', 'John', 'Smith', 'johndoe@example.com', 5, 'I enjoyed a picturesque cruise along the Seine River!', 'Beautiful River Cruise', 1669576200, 'Seine River Cruise'),
(72, 'Emily Johnson', 'Emily', 'Johnson', 'emilyjohnson@example.com', 5, 'Walking down the Champs-Élysées was a dream come true!', 'Iconic Avenue', 1669576200, 'Champs-Élysées'),
(73, 'Michael Brown', 'Michael', 'Brown', 'michaelbrown@example.com', 4, 'Big Ben is even more impressive in person!', 'Iconic Clock Tower', 1669576200, 'Big Ben'),
(74, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'The history and stories of the Tower of London are fascinating!', 'Historic Landmark', 1669576200, 'Tower of London'),
(75, 'William Wilson', 'William', 'Wilson', 'williamwilson@example.com', 4, 'Buckingham Palace is an architectural masterpiece!', 'Royal Residence', 1669576200, 'Buckingham Palace'),
(76, 'Sophia Thompson', 'Sophia', 'Thompson', 'sophiathompson@example.com', 5, 'The British Museum has an incredible collection!', 'World-Class Museum', 1669576200, 'British Museum'),
(77, 'James Taylor', 'James', 'Taylor', 'jamestaylor@example.com', 5, 'The Tower Bridge offers spectacular views of the River Thames!', 'Iconic Bridge', 1669576200, 'Tower Bridge'),
(78, 'Charlotte Evans', 'Charlotte', 'Evans', 'charlotteevans@example.com', 4, 'The British Library is a paradise for book lovers!', 'Impressive Library', 1669576200, 'The British Library'),
(79, 'Daniel Anderson', 'Daniel', 'Anderson', 'danielanderson@example.com', 5, 'The Colosseum is an architectural marvel!', 'Ancient Amphitheater', 1669576200, 'Colosseum'),
(80, 'Amelia Martinez', 'Amelia', 'Martinez', 'ameliamartinez@example.com', 5, 'Visiting Vatican City was a spiritually enriching experience!', 'Sacred Destination', 1669576200, 'Vatican City'),
(81, 'Oliver Harris', 'Oliver', 'Harris', 'oliverharris@example.com', 4, 'The Trevi Fountain is a must-see landmark in Rome!', 'Iconic Fountain', 1669576200, 'Trevi Fountain'),
(82, 'Sophie Turner', 'Sophie', 'Turner', 'sophieturner@example.com', 5, 'The Pantheon is an architectural marvel!', 'Ancient Temple', 1669576200, 'Pantheon'),
(83, 'Henry Cooper', 'Henry', 'Cooper', 'henrycooper@example.com', 5, 'The Roman Forum offers a glimpse into ancient Rome!', 'Historical Site', 1669576200, 'Roman Forum'),
(84, 'Sophia Clark', 'Sophia', 'Clark', 'sophiaclark@example.com', 5, 'The Sistine Chapel is a masterpiece of art!', 'Iconic Chapel', 1669576200, 'Sistine Chapel'),
(85, 'Lucas Turner', 'Lucas', 'Turner', 'lucasturner@example.com', 5, 'The Statue of Liberty is a symbol of freedom!', 'Iconic Statue', 1669576200, 'Statue of Liberty'),
(86, 'John Smith', 'John', 'Smith', 'johndoe@example.com', 5, 'Times Square is vibrant and full of energy!', 'Iconic Landmark', 1669576200, 'Times Square'),
(87, 'Emily Johnson', 'Emily', 'Johnson', 'emilyjohnson@example.com', 5, 'Central Park is a peaceful oasis in the heart of the city!', 'Beautiful Park', 1669576200, 'Central Park'),
(88, 'Michael Brown', 'Michael', 'Brown', 'michaelbrown@example.com', 4, 'The Empire State Building offers stunning views of the city!', 'Iconic Skyscraper', 1669576200, 'Empire State Building'),
(89, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'The 9/11 Memorial and Museum is a moving tribute!', 'Memorable Experience', 1669576200, '9/11 Memorial and Museum'),
(90, 'William Wilson', 'William', 'Wilson', 'williamwilson@example.com', 4, 'The Museum of Modern Art (MoMA) showcases incredible artworks!', 'Art Lover\'s Paradise', 1669576200, 'Museum of Modern Art (MoMA)'),
(91, 'Sophia Thompson', 'Sophia', 'Thompson', 'sophiathompson@example.com', 5, 'Tokyo Disneyland is a magical experience for all ages!', 'Unforgettable Theme Park', 1669576200, 'Tokyo Disneyland'),
(92, 'James Taylor', 'James', 'Taylor', 'jamestaylor@example.com', 5, 'Senso-ji Temple is a beautiful and peaceful place!', 'Sacred Temple', 1669576200, 'Senso-ji Temple'),
(93, 'Charlotte Evans', 'Charlotte', 'Evans', 'charlotteevans@example.com', 4, 'Meiji Shrine is a serene sanctuary in the midst of Tokyo!', 'Peaceful Shrine', 1669576200, 'Meiji Shrine'),
(94, 'Daniel Anderson', 'Daniel', 'Anderson', 'danielanderson@example.com', 5, 'Shibuya Crossing is an exhilarating intersection!', 'Iconic Intersection', 1669576200, 'Shibuya Crossing'),
(95, 'Amelia Martinez', 'Amelia', 'Martinez', 'ameliamartinez@example.com', 5, 'Tsukiji Fish Market is a paradise for seafood lovers!', 'Vibrant Fish Market', 1669576200, 'Tsukiji Fish Market'),
(96, 'John Smith', 'John', 'Smith', 'johndoe@example.com', 5, 'Times Square is vibrant and full of energy!', 'Iconic Landmark', 1669576200, 'Times Square'),
(97, 'Emily Johnson', 'Emily', 'Johnson', 'emilyjohnson@example.com', 5, 'Central Park is a peaceful oasis in the heart of the city!', 'Beautiful Park', 1669576200, 'Central Park'),
(98, 'Michael Brown', 'Michael', 'Brown', 'michaelbrown@example.com', 4, 'The Empire State Building offers stunning views of the city!', 'Iconic Skyscraper', 1669576200, 'Empire State Building'),
(99, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'The 9/11 Memorial and Museum is a moving tribute!', 'Memorable Experience', 1669576200, '9/11 Memorial and Museum'),
(100, 'William Wilson', 'William', 'Wilson', 'williamwilson@example.com', 4, 'The Museum of Modern Art (MoMA) showcases incredible artworks!', 'Art Lover\'s Paradise', 1669576200, 'Museum of Modern Art (MoMA)'),
(101, 'Sophia Thompson', 'Sophia', 'Thompson', 'sophiathompson@example.com', 5, 'Tokyo Disneyland is a magical experience for all ages!', 'Unforgettable Theme Park', 1669576200, 'Tokyo Disneyland'),
(102, 'James Taylor', 'James', 'Taylor', 'jamestaylor@example.com', 5, 'Senso-ji Temple is a beautiful and peaceful place!', 'Sacred Temple', 1669576200, 'Senso-ji Temple'),
(103, 'Charlotte Evans', 'Charlotte', 'Evans', 'charlotteevans@example.com', 4, 'Meiji Shrine is a serene sanctuary in the midst of Tokyo!', 'Peaceful Shrine', 1669576200, 'Meiji Shrine'),
(104, 'Daniel Anderson', 'Daniel', 'Anderson', 'danielanderson@example.com', 5, 'Shibuya Crossing is an exhilarating intersection!', 'Iconic Intersection', 1669576200, 'Shibuya Crossing'),
(105, 'Amelia Martinez', 'Amelia', 'Martinez', 'ameliamartinez@example.com', 5, 'Tsukiji Fish Market is a paradise for seafood lovers!', 'Vibrant Fish Market', 1669576200, 'Tsukiji Fish Market'),
(106, 'Oliver Harris', 'Oliver', 'Harris', 'oliverharris@example.com', 4, 'The Tokyo Tower offers breathtaking views of the city!', 'Iconic Landmark', 1669576200, 'Tokyo Tower'),
(107, 'Emma Wilson', 'Emma', 'Wilson', 'emmawilson@example.com', 5, 'The Louvre Museum is a treasure trove of art!', 'World-Class Art Museum', 1669576200, 'Louvre Museum'),
(108, 'Jacob Thompson', 'Jacob', 'Thompson', 'jacobthompson@example.com', 5, 'The Great Wall of China is an architectural marvel!', 'Ancient Wonder', 1669576200, 'Great Wall of China'),
(109, 'Olivia Davis', 'Olivia', 'Davis', 'oliviadavis@example.com', 5, 'The Acropolis is a symbol of ancient Greek civilization!', 'Historical Landmark', 1669576200, 'Acropolis of Athens'),
(110, 'Liam Wilson', 'Liam', 'Wilson', 'liamwilson@example.com', 5, 'The Sydney Opera House is an architectural masterpiece!', 'Iconic Performing Arts Venue', 1669576200, 'Sydney Opera House');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Full', 'test', 'test@g.com', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'Test 2 Full', 'testy', 'testy@gmail.com', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'full', 'user', 'email@text.com', '098f6bcd4621d373cade4e832627b4f6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Attractions`
--
ALTER TABLE `Attractions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flightbook`
--
ALTER TABLE `flightbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelbook`
--
ALTER TABLE `hotelbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelroom`
--
ALTER TABLE `hotelroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Locations`
--
ALTER TABLE `Locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `Attractions`
--
ALTER TABLE `Attractions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=606;

--
-- AUTO_INCREMENT for table `flightbook`
--
ALTER TABLE `flightbook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hotelbook`
--
ALTER TABLE `hotelbook`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotelroom`
--
ALTER TABLE `hotelroom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Locations`
--
ALTER TABLE `Locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
