# Docker Chat App

A simple messaging website built using Docker with:

- HTML/CSS/JS frontend
- PHP backend
- MySQL database

## Features

- User Signup
- User-to-user messaging
- Messages stored in MySQL
- Basic chat interface

## How to Run

1. Clone the repo and navigate to the folder:
   ```bash
   git clone <your-repo-url>
   cd my-docker-chat-app
   ```

2. Start the containers:
   ```bash
   docker-compose up --build
   ```

3. Visit the app at:
   ```
   http://localhost:8080
   ```

4. Create tables manually in MySQL (or automate if desired):

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  sender VARCHAR(50),
  receiver VARCHAR(50),
  message TEXT,
  timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
"# my-docker-chat-app" 
