<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */


interface BeanstalkConnectionStream
{

    /**
     * Open the stream
     *
     * @param string $host Host or IP address to connect to
     * @param integer $port Port to connect on
     * @return boolean
     */
    public function open($host, $port);

    /**
     * Has the connection timed out?
     *
     * @return boolean
     */
    public function isTimedOut();

    /**
     * Write data to the stream
     *
     * @param string $data
     * @return integer Number of bytes written
     */
    public function write($data);

    /**
     * Read the next line from the stream
     *
     * @return string
     */
    public function readLine();

    /**
     * Read the next $bytes bytes from the stream
     *
     * @param integer $bytes Number of bytes to read
     * @return string
     */
    public function read($bytes);

    /**
     * Close the stream connection
     *
     * @return void
     */
    public function close();

}
