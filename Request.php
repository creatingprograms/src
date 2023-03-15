<?php
declare(strict_types=1);

/**
 * Request class from the user's browser
 */
final class Request
{
    /**
     * @var string
     */
    private string $ip_address;
    /**
     * @param string $ip_address
     */
    public function __construct(string $ip_address)
	{
        $this->ip_address = $ip_address;
    }
    /**
     * @return string
     */
    public function getIP(): string
    {
        return $this->ip_address;
    }
}
?>
