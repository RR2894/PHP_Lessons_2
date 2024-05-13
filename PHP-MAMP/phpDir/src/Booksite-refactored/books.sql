CREATE TABLE IF NOT EXISTS  books 
(
    id	INT,
    title	VARCHAR(512),
    description	VARCHAR(512),
    author	VARCHAR(512),
    publishing_year	INT,
    genre	VARCHAR(512)
);

INSERT INTO books (id, title, description, author, publishing_year, genre) VALUES
	('1', 'To Kill a Mockingbird', 'Harper Lee\'s masterpiece explores racial injustice and moral growth through the eyes of a young girl in the American South.', 'Harper Lee', '1960', 'Classic Literature'),
	('2', '1984', 'George Orwell\'s dystopian novel depicts a totalitarian regime where individuality and truth are suppressed.', 'George Orwell', '1949', 'Science Fiction'),
	('3', 'Pride and Prejudice', 'Jane Austen\'s classic romance explores social class, manners, and love in early 19th-century England.', 'Jane Austen', '1813', 'Romance'),
	('4', 'Moby-Dick', 'Herman Melville\'s epic tale follows Captain Ahab\'s obsessive quest for revenge against the white whale.', 'Herman Melville', '1851', 'Adventure'),
	('5', 'The Catcher in the Rye', 'J.D. Salinger\'s novel portrays the angst and alienation of a teenager in 1950s America.', 'J.D. Salinger', '1951', 'Coming-of-age'),
	('6', 'Frankenstein', 'Mary Shelley\'s Gothic novel explores themes of ambition, creation, and the consequences of playing God.', 'Mary Shelley', '1818', 'Horror'),
	('7', 'The Great Gatsby', 'F. Scott Fitzgerald\'s novel delves into the American Dream and the decadence of the Jazz Age.', 'F. Scott Fitzgerald', '1925', 'Classic Literature'),
	('8', 'Brave New World', 'Aldous Huxley\'s novel presents a futuristic society where technology and conditioning control human behavior.', 'Aldous Huxley', '1932', 'Science Fiction'),
	('9', 'Jane Eyre', 'Charlotte Brontë\'s novel tells the story of an orphaned governess who falls in love with her enigmatic employer.', 'Charlotte Brontë', '1847', 'Romance'),
	('10', 'The Adventures of Huckleberry Finn', 'Mark Twain\'s novel follows the adventures of a young boy and a runaway slave as they travel down the Mississippi River.', 'Mark Twain', '1884', 'Adventure'),
	('11', 'Neverwhere', 'Neil Gaiman\'s fantasy novel follows Richard Mayhew as he discovers the hidden world of London Below and embarks on a quest to help Door, a young woman from this mysterious realm.', 'Neil Gaiman', '1996', 'Fantasy'),
	('12', 'The Time Traveler\'s Wife', 'Audrey Niffenegger\'s novel tells the love story of Clare Abshire and Henry DeTamble, a man with a genetic disorder that causes him to time travel unpredictably.', 'Audrey Niffenegger', '2003', 'Romance'),
	('13', 'The Shadow of the Wind', 'Carlos Ruiz Zafón\'s novel follows Daniel Sempere as he discovers a mysterious book and becomes entangled in its secrets, leading him on a journey through post-war Barcelona.', 'Carlos Ruiz Zafón', '2001', 'Mystery'),
	('14', 'Eragon', 'Christopher Paolini\'s fantasy novel follows the story of a young farm boy named Eragon who discovers a dragon egg and becomes embroiled in an ancient conflict.', 'Christopher Paolini', '2002', 'Fantasy'),
	('15', 'The Lovely Bones', 'Alice Sebold\'s novel narrated by Susie Salmon, a young girl who was murdered and watches from her personal Heaven as her family and friends cope with her death.', 'Alice Sebold', '2002', 'Coming-of-age'),
	('16', 'The Princess Diaries', 'Meg Cabot\'s novel follows Mia Thermopolis as she navigates high school, friendships, and romance while discovering she\'s the heir to the throne of a small European principality.', 'Meg Cabot', '2000', 'Coming-of-age'),
	('17', 'His Dark Materials: The Golden Compass', 'Philip Pullman\'s fantasy novel follows Lyra Belacqua as she embarks on a journey to the Arctic to rescue kidnapped children and uncover a sinister plot.', 'Philip Pullman', '1995', 'Fantasy'),
	('18', 'The Name of the Wind', 'Patrick Rothfuss\' fantasy novel follows the life of Kvothe, a gifted young man who grows up to become the most notorious wizard his world has ever seen.', 'Patrick Rothfuss', '2007', 'Fantasy'),
	('19', 'The Da Vinci Code', 'Dan Brown\'s thriller follows symbologist Robert Langdon as he investigates a murder in the Louvre and uncovers a centuries-old conspiracy.', 'Dan Brown', '2003', 'Mystery'),
	('20', 'Memoirs of a Geisha', 'Arthur Golden\'s historical novel tells the story of Sayuri, a young Japanese girl who trains to become a geisha in pre-World War II Japan.', 'Arthur Golden', '1997', 'Historical Fiction'),
	('21', 'Testing Book 101', 'Testing add book with historical fiction genre wohooo', 'Adel', '2024', 'Historical Fiction');