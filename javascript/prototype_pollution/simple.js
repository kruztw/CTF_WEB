function Cat() {
    this.sound = 'meow!';
}

// 起初是空的
console.log(Cat.prototype);

Cat.prototype.meow = function() {
    console.log(this.sound);
}

console.log(Cat.prototype);

let kitten = new Cat();
console.log(kitten.__proto__);


// kitten.__proto__  -->  Cat.prototype
// 下層.__proto__    -->  上層.prototype
// instance 在使用物件時會找區域變數, 沒有就往 __proto__ 找

console.log(kitten.sound);  // 區域變數
kitten.meow();              // 找尋 kitten.__proto__ 相當於 Cat.prtotype

kitten["__proto__"]["meow"] = function() { console.log("woof"); };
kitten.meow();


let kitten2 = new Cat(); // 因為 Cat.prototype 被污染了, 所以 kitten2 也會遭殃
kitten2.meow();
