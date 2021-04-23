class student { 
    #name;
    #id
    set(name ,id){
        this.#name = name;
        this.#id = id;
    }
    getname(){
        return this.#name;
    }
    getid(){
        return this.#id;
    }   
}
let student1 = new student();

student1.set("NOURDDIN", 11);
console.log(student1.name);
// console.log(student1.getid());




// let student2 = new student();
// student2.set("hamza", 12);
// console.log(student2.getname());
// console.log(student2.getid());