mysql> USE dbposyandu;
Database changed
mysql> CREATE TABLE pengguna (
    -> id_pengguna INT PRIMARY KEY,
    -> nama VARCHAR(100),
    -> username VARCHAR(100),
    -> password VARCHAR(255),
    -> role ENUM('admin', 'kader')
    -> );
Query OK, 0 rows affected (0.14 sec)

mysql> CREATE TABLE bayi (
    -> id_bayi INT PRIMARY KEY,
    -> nama VARCHAR(100),
    -> nama_ibu(100),
    -> nama_ayah(100),
    -> tanggal_lahir DATE
    -> );
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(100),
nama_ayah(100),
tanggal_lahir DATE
)' at line 4
mysql> CREATE TABLE bayi (
    -> id_bayi INT PRIMARY KEY,
    -> nama_ibu VARCHAR(100),
    -> nama_ayah VARCHAR(100),
    -> tanggal_lahir DATE
    -> );
Query OK, 0 rows affected (0.07 sec)

mysql> CREATE TABLE catatan (
    -> id INT PRIMARY KEY,
    -> id_kader INT,
    -> id_bayi INT,
    -> tinggi DECIMAL(5,2),
    -> berat DECIMAL(5,2),
    -> tanggal DATE,
    -> CONSTRAINT fk_kader FOREIGN KEY (id_kader) REFERENCES pengguna(id_pengguna),
    -> CONSTRAINT fk_bayi FOREIGN KEY (id_bayi) REFERENCES bayi(id_bayi)
    -> );
Query OK, 0 rows affected (0.14 sec)

mysql> INSERT INTO pengguna (id_pengguna, nama, username, password, role) VALUES
    -> (1, 'Admin Dimas', 'adminDimas', 'password123', 'admin'),
    -> (2, 'Kader Chelsea', 'kaderChelsea', 'password123', 'kader'),
    -> (3, 'Kader Indah', 'kaderIndah', 'password123', 'kader');
Query OK, 3 rows affected (0.21 sec)
Records: 3  Duplicates: 0  Warnings: 0

mysql>