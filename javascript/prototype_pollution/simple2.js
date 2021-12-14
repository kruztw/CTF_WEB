function Father() {}

Father.prototype.name = "Father";

let son1 = new Father();
let son2 = new Father();

console.log(son1.__proto__.name);
console.log(son2.__proto__.name);

Father.prototype.name = "Dad";

console.log(son1.__proto__.name);
console.log(son2.__proto__.name);

son1.__proto__.name = "my dad";

console.log(son1.__proto__.name);
console.log(son2.__proto__.name);
