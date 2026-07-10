# What Is Command Injection?

Command injection is a vulnerability that allows an attacker to run commands on the target system.

This vulnerability happens when user input, such as a URL parameter, is sent directly to the operating system as a command.

Attackers can use this vulnerability to:

* Collect information about the target system
* Run malicious commands
* Take control of the server

## Vulnerable Code Example

```php
$input = $_GET['x'];
system($input);
```

This backend code gets the `x` parameter from the URL using a GET request and sends its value directly to the `system()` function.

The `x` parameter can contain an operating system command.

## Example Request

```text
http://site.com/test.php?x=ls
```

In this request, the value of the `x` parameter is:

```text
ls
```

The backend processes it like this:

```php
$input = "ls";
system($input);
```

As a result, the `ls` command is executed on the server.

## Types of Command Injection

### Visible Command Injection

The output of the command is directly displayed in the response.

```php
$output = shell_exec($command);
echo $output;
```

Example:

```text
127.0.0.1;whoami
```

The response displays:

```text
moren
```

### Blind Time Delay

The command is executed, but its output is not displayed.

It can be detected by checking how long the response takes.

```php
shell_exec($command);
echo "{}";
```

Example:

```text
||ping -c 10 127.0.0.1||
```

The response is still:

```text
{}
```

However, it arrives about 10 seconds later.

### Blind Output Redirection

The command output is not displayed in the response.

For this reason, the output is written to a file and the file is read later.

```text
;whoami>images/output.txt;
```

Then:

```text
view.php?filename=output.txt
```

When this page is opened, the output of the `whoami` command is displayed.


## Types of Operators

* `;` → Runs the command on the right after the command on the left finishes.

  ```bash
  ls;whoami
  ```

* `&&` → Runs the command on the right only if the command on the left is successful.

  ```bash
  ls && whoami
  ```

* `||` → Runs the command on the right only if the command on the left fails.

  ```bash
  nonexistent_command || whoami
  ```

* `|` → Sends the output of the command on the left to the command on the right.

  ```bash
  ls | wc -l
  ```

* `>` → Writes the output to a file. If the file already exists, its content is overwritten.

  ```bash
  whoami > output.txt
  ```

* `>>` → Adds the output to the end of a file.

  ```bash
  whoami >> output.txt
  ```

* `$()` → Runs the command inside the parentheses and places its output inside another command.

  ```bash
  echo $(whoami)
  ```
