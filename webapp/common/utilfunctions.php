<?php

class UtilFunctions {

    public static function normalDate($date) {
        $date = getdate(strtotime($date));
        return $date['mday']." ".substr($date['month'], 0, 3)." ".$date['year'];
    }

    public static function truncateString($string, $n) {
        if (strlen($string) <= $n) {
            return $string;
        } else {
            return (substr($string, 0, $n)."...");
        }
    }

    public static function dump($var) {
        echo '<pre>';print_r($var);exit;
    }

    // improve this function
    public static function getCategoryIdWord($id)
    {
        $numbers = array(1 => "one", 2 => "two", 3 => "three", 4 => "four", 5 => "five", null => null);
        return $numbers[$id];
    }

    public static function prettyDate($date) {
        $now = time();
        $diff_sec = $now - strtotime($date);

        if($diff_sec < 60) {
            if($diff_sec != 0) {
                return $diff_sec."s ago";
            } else {
                return "1s ago";
            }
        } else {
            $diff_min = ceil($diff_sec / 60);
            if($diff_min < 60) {
                return $diff_min."min ago";
            } else {
                $diff_hour = round($diff_min / 60);
                if($diff_hour < 24) {
                    return $diff_hour."h ago";
                } else {
                    $diff_day = round($diff_hour / 24);
                    if($diff_day < 7) {
                        return $diff_day."d ago";
                    } else {
                        $date = getdate(strtotime($date));
                        $now = getdate($now);

                        if($date['year'] == $now['year']) {
                            return substr($date['month'], 0, 3)." ".$date['mday']." at ".$date['hours'].":".$date['minutes'];
                        } else {
                            return $date['year']." ".substr($date['month'], 0, 3)." ".$date['mday']." at ".$date['hours'].":".$date['minutes'];
                        }
                    }
                }
            }
        }
    }

    /*
     * Convert seconds to human readable text.
     *
     */
    public static function secs_to_h($secs)
    {
        $units = array(
            "week"   => 7*24*3600,
            "day"    =>   24*3600,
            "hour"   =>      3600,
            "minute" =>        60,
            "second" =>         1,
            );

        // specifically handle zero
        if ( $secs == 0 ) return "0 seconds";

        $s = "";

        foreach ( $units as $name => $divisor ) {
            if ( $quot = intval($secs / $divisor) ) {
                $s .= "$quot $name";
                $s .= (abs($quot) > 1 ? "s" : "") . ", ";
                $secs -= $quot * $divisor;
            }
        }

        return substr($s, 0, -2);
    }
}
?>