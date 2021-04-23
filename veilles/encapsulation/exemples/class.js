class Counter {
  #count = 0
  
  click () {
    this.#count += 1;
  }
  getCount () {
    return this.#count
  }
}
const myCounter = new Counter();
myCounter.click();
myCounter.click();
myCounter.click();

console.log(
  myCounter.getCount()

);


// console.log(
//   myCounter.count);