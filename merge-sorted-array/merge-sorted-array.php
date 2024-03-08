class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $nums1_max_index = $m - 1;
        $nums2_max_index = $n - 1;
        
        $arr_last_index = $m + $n - 1;
        
        while($nums2_max_index >= 0) {
            if($nums1[$nums1_max_index] > $nums2[$nums2_max_index]) {
                $nums1[$arr_last_index] = $nums1[$nums1_max_index];
                $nums1_max_index--;
            } else {
                $nums1[$arr_last_index] = $nums2[$nums2_max_index];
                $nums2_max_index--;
            }
            $arr_last_index--;
        }
    }
}