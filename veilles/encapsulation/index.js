class Circle {
     
    set(diameter,color) {
          this.diameter=diameter;
          this.color= color;
    }
    draw(){
        const div = document.createElement('div');       
        div.style.width = this.diameter+'px';
        div.style.height = this.diameter+'px';
        div.style.borderRadius = '50%';
        div.style.backgroundColor = this.color;
        document.body.appendChild(div);
    }
   get(){
       return this.draw();
    }
}

const circle = new Circle();
circle.set(100, 'red');
circle.get();

const circle1 = new Circle();
circle1.set(200, 'blue');
circle1.get();

const circle2 = new Circle();
circle2.set(400, '#000');
circle2.get();


