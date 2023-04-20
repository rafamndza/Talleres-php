<?php
/*Stack : sequential collection with a particular property, which states that
the last object placed on the stack, will be the first object removed.(LIFO)


init — create the stack.
push — add an item to the top of the stack.
pop — remove the last item added to the top of the stack.
top — look at the item on the top of the stack without removing it.
isEmpty — return whether the stack contains no more items.
array_shift() — Removes the first element in the array.
array_unshift() — Added new variables as the first element in the array.

let stack = [];

function add (value){
stack.push(value);
};
function destroy(){
stack.pop()};

function Pila(){
let datos = []
this.prototype.add = value => datos.push(value);
this.prototype.destroy= ()=>datos.pop();

}

*/


class Stack {
    protected $stack;
    protected $limit;

    public function __construct($limit=10,$initial=array()){
        $this->stack = $initial ;
        $this->limit = $limit;
    }

    public function add($item){
        if (count($this->stack) < $this->limit){
            array_unshift($this->stack, $item);
        }else{
            echo 'Stack is full and cannot add any more items';
        }
    }

    public function destroy(){
        if ($this->isEmpty()){
            echo "Stack is empty";
        }else{
            return array_shift($this->stack);
        }
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}

$stack = new Stack(10, array(1, 2, 3, 4, 5));
$stack->add(100);
echo $stack->destroy();
var_dump($stack);

/*Queue exercise

let cola =[]
queue.prototype.enqueue = value => cola.push(value);
queue.prototype.dequeue = ()=> cola.shift()
queue.prototype.size = () => cola.length()

*/

class Queue {
    private $queue = array();

    public function enqueue($value) {
        array_push($this->queue, $value);
    }

    public function dequeue() {
        return array_shift($this->queue);
    }

    public function size() {
        return count($this->queue);
    }
}

$queue = new Queue();
$queue->enqueue('value1');
$queue->enqueue('value2');
echo $queue->dequeue(); // 
echo $queue->size(); // 

//por el amor a ditto decime que si entendi xd

?>
