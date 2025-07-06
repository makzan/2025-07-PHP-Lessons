# Note on using SQLite db for local PHP development

1. Create a new blank SQLite database: `sqlite3 file.db "VACUUM;"`
    - Make sure you rename the file.db into something relevant. For exmaple, quotes.db.
2. By default, Adminer doesn't support accessing database without password. But SQLite doesn't support password. So we use a dedicated version here:
    - https://github.com/FrancoisCapon/LoginToASqlite3DatabaseWithoutCredentialsWithAdminer/releases
3. Access the SQLite db via this dedicated adminer.php file.
4. Operate the databases in Adminer as normal.

