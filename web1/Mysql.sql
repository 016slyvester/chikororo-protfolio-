CREATE TABLE education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    school VARCHAR(255),
    degree VARCHAR(255),
    year YEAR
);

CREATE TABLE work_experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company VARCHAR(255),
    position VARCHAR(255),
    years VARCHAR(20)
);
