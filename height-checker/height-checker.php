class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $copy = $heights;

        sort($heights);

        $incorrect_count = 0;

        for ($i = 0; $i < count($heights); $i++) {
            if ($copy[$i] != $heights[$i]) {
                $incorrect_count++;
            }
        }

        return $incorrect_count; 
    }
}