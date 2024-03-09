class MyLinkedList
{

    public Node|null $head = null;

    public int $size = 0;

    /**
     */
    function __construct()
    {
    }

    /**
     * @param Integer $index
     * @return Integer
     */
    function get($index)
    {
        if ($index < 0 || $index >= $this->size) {
            return -1;
        }

        if ($this->head == null) {
            return -1;
        }

        $curr = $this->head;

        for ($i = 0; $i < $index; $i++) {
            $curr = $curr->next;
        }

        return $curr->val;
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val)
    {
        $node = new Node($val);
        $node->next = $this->head;
        $this->head = $node;

        $this->size++;
    }

    /**
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val)
    {
        $curr = $this->head;
        if (is_null($curr)) {
            $this->head = new Node($val);
        } else {
            while ($curr->next != null) {
                $curr = $curr->next;
            }
            $curr->next = new Node($val);
        }

        $this->size++;
    }

    /**
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val)
    {
        if ($index > $this->size || $index < 0) {
            return;
        }

        if ($index == 0) {
            $this->addAtHead($val);
        } else {
            $curr = $this->head;

            for ($i = 0; $i < $index - 1; $i++) {
                $curr = $curr->next;
            }

            $node = new Node($val);

            $node->next = $curr->next;

            $curr->next = $node;

            $this->size++;
        }
    }

    /**
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index)
    {
        if ($index < 0 || $index >= $this->size) {
            return;
        }

        $curr = $this->head;

        if ($index == 0) {
            $this->head = $curr->next;
        } else {
            for ($i = 0; $i < $index - 1; $i++) {
                $curr = $curr->next;
            }

            $curr->next = $curr->next->next;

            $this->size--;
        }
    }
}

class Node
{
    public $val = null;

    public $next = null;

    public function __construct($val, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

$obj = new MyLinkedList();
$ret_1 = $obj->get($index);
$obj->addAtHead($val);
$obj->addAtTail($val);
$obj->addAtIndex($index, $val);
$obj->deleteAtIndex($index);