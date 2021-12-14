package main

import (
    "fmt"
    "net/http"
    "io/ioutil"
    "log"
    "github.com/buger/jsonparser"
)

func home(w http.ResponseWriter, r *http.Request) {
    reqBody, _ := ioutil.ReadAll(r.Body)
    show, err := jsonparser.GetString(reqBody, "show")
    if (err!=nil){
        fmt.Fprintf(w, "err")
        return
    }

    if show == "1" {
        fmt.Fprintf(w, "flag{}")
        return
    }

    fmt.Fprintf(w, "Ok")
    return
}

func main() {
    http.HandleFunc("/", home)
    err := http.ListenAndServe(":8888", nil)
    if err != nil {
        log.Fatal("ListenAndServe: ", err)
    }
}
