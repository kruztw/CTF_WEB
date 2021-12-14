// node simple3.js
// https://hackmd.io/@foxo-tw/Sy57iBSsH?print-pdf#/p34

a = Object();
b = Object();
a.__proto__.isAdmin = true;
if (b.isAdmin) {
    console.log("b.isAdmin");
}
