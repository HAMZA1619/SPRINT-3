function Stack(){
    let list = [];
    
    function push(value){ list.push(value); }
    function pop(){ return list.pop(); }
    
    return Object.freeze({
      push,
      pop
    });
  }
let stack = Stack();

stack.push("HELLO");
 
// console.log(stack.pop());


console.log(stack.list);