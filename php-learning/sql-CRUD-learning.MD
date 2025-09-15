# SQL CRUD Operations Guide

This guide explains the four basic SQL operations—Create, Read, Update, and Delete (CRUD)—with examples using a `services` table from the City Glam Salon app.

---

## 1. CREATE (Insert Data)
Add a new service to the table:
```sql
INSERT INTO services (name, description, icon) VALUES
('Haircut & Styling', 'Trendy cuts and expert styling.', '💇‍♀️');
```

---

## 2. READ (Select Data)
Get all services:
```sql
SELECT * FROM services;
```
Get a specific service by ID:
```sql
SELECT * FROM services WHERE id = 1;
```

---

## 3. UPDATE (Modify Data)
Change the name of a service:
```sql
UPDATE services SET name = 'Haircut & Blowdry' WHERE id = 1;
```

---

## 4. DELETE (Remove Data)
Delete a service by ID:
```sql
DELETE FROM services WHERE id = 1;
```

---

## Example Table Structure
```sql
CREATE TABLE services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50)
);
```

---

## Quick Reference
| Operation | SQL Keyword | Example |
|-----------|------------|---------|
| Create    | INSERT      | `INSERT INTO ...` |
| Read      | SELECT      | `SELECT ...`      |
| Update    | UPDATE      | `UPDATE ...`      |
| Delete    | DELETE      | `DELETE ...`      |

---

**Tip:** Always use `WHERE` in `UPDATE` and `DELETE` to avoid affecting all rows!

---

## Practice Exercise
Try writing SQL to:
- Add a new service
- List all services
- Update a service's description
- Delete a service by name

---

This file is for learning and reference. For more, see the official [MySQL documentation](https://dev.mysql.com/doc/).
