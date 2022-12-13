<?php session_start();
session_destroy();
header("location:Login.php"); 

class A {
    const DEFAULT_SESSION_NAME = 'session';
    const DEFAULT_SESSION_LIFETIME = 60 * 60;

    protected string $name;
    protected int $lifetime;
    public function destroy()
    {
        session_destroy();
    }

    public function getValue(string $name)
    {
        return ($_SESSION[$name] ?? null);
    }

    public function setValue(string $name, $value)
    {
        $_SESSION[$name] = $value;
    }

}
exit;
?>