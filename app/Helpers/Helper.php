<?php
namespace App\Helpers;

use Hashids\Hashids;
use Illuminate\Support\Facades\Hash;

class Helper
{
    /**
     * Convert project name with spaces to hyphens.
     *
     * @param  string  $projectName
     * @return string
     */
    public static function spaceToHyphen($projectName)
    {
        return str_replace(' ', '-', $projectName);
    }

    /**
     * Convert project name with hyphens back to spaces.
     *
     * @param  string  $projectName
     * @return string
     */
    public static function hyphenToSpace($projectName)
    {
        return str_replace('-', ' ', $projectName);
    }
    
    /**
     * Encode the given ID into a hash ID.
     *
     * @param  mixed  $id
     * @return string
     */
    public static function encodeId($id)
    {
        $salt = env('UTILITY_SALT', 'your-secret-salt');
        $hashids = new Hashids($salt, 10);  // 10 is the minimum length of the hash
        return $hashids->encode($id);
    }

    /**
     * Decode the given hash ID back into its original value.
     *
     * @param  string  $hash
     * @return array
     */
    public static function decodeId($hash)
    {
        $salt = env('UTILITY_SALT', 'your-secret-salt');
        $hashids = new Hashids($salt, 10);
        return $hashids->decode($hash);
    }

    /**
     * Hash a string using bcrypt for security.
     *
     * @param  string  $string
     * @return string
     */
    public static function bcryptHash($string)
    {
        return bcrypt($string);
    }

    /**
     * Verify a hashed string using bcrypt.
     *
     * @param  string  $string
     * @param  string  $hashedString
     * @return bool
     */
    public static function verifyBcrypt($string, $hashedString)
    {
        return Hash::check($string, $hashedString);
    }

    /**
     * Encrypt data using Laravel's default encryption.
     *
     * @param  mixed  $data
     * @return string
     */
    public static function encryptData($data)
    {
        return encrypt($data);
    }

    /**
     * Decrypt data using Laravel's default decryption.
     *
     * @param  string  $data
     * @return mixed
     */
    public static function decryptData($data)
    {
        return decrypt($data);
    }
}
