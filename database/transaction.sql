/* START TRANSACTION	Begins a new transaction.
COMMIT	Saves all changes made during the transaction permanently.
ROLLBACK	Reverts all changes made in the transaction.
SAVEPOINT	Sets a named savepoint within a transaction.
ROLLBACK TO SAVEPOINT	Rolls back changes made after a specific savepoint.
SET AUTOCOMMIT = 0	Disables autocommit mode, so statements require a commit. */


-- Start the transaction
START TRANSACTION;

-- Step 1: Deduct 100 units from account1
UPDATE accounts
SET balance = balance - 100
WHERE account_id = 1;

-- Step 2: Add 100 units to account2
UPDATE accounts
SET balance = balance + 100
WHERE account_id = 2;

-- Commit the transaction if both updates succeed
COMMIT;




START TRANSACTION;

-- Step 1: Deduct 100 units from account1
UPDATE accounts
SET balance = balance - 100
WHERE account_id = 1;

-- Step 2: Add 100 units to account2
UPDATE accounts
SET balance = balance + 100
WHERE account_id = 2;

-- Simulate an error
SET @error = 1;
IF @error THEN
    -- Roll back the transaction
    ROLLBACK;
END IF;


/* role back */
START TRANSACTION;

-- Step 1: Deduct 50 units from account1
UPDATE accounts
SET balance = balance - 50
WHERE account_id = 1;

-- Set a savepoint
SAVEPOINT halfway;

-- Step 2: Add 50 units to account2
UPDATE accounts
SET balance = balance + 50
WHERE account_id = 2;

-- If something goes wrong, roll back to the savepoint
ROLLBACK TO SAVEPOINT halfway;

-- Commit the transaction
COMMIT;
