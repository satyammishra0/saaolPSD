CREATE TABLE assess_risk_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    high_blood_pressure ENUM('Yes', 'No') NOT NULL,
    diabetes ENUM('Yes', 'No') NOT NULL,
    family_history ENUM('Yes', 'No') NOT NULL,
    overweight ENUM('Yes', 'No') NOT NULL,
    smoking ENUM('Yes', 'No') NOT NULL,
    walking ENUM('Yes', 'No') NOT NULL,
    diet ENUM('Yes', 'No') NOT NULL,
    fruits_salads ENUM('Yes', 'No') NOT NULL,
    stress ENUM('Yes', 'No') NOT NULL,
    cholesterol ENUM('Yes', 'No') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
