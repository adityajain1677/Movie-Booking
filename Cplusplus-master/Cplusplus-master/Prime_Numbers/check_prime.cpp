#include<iostream>
using namespace std;
int main(){
    int number,i;
    cout<<"Enter the number ";
    cin>>number;

    for(i=2;i<=(number/2);i++)
        if((number%i)==0)
            break; // cout<<number<<" is not Prime Number";

    if(--i==(number/2))                       // as value of i after for loop will be 1+
        cout<<number<<" is Prime Number";
    else                                      
        cout<<number<<" is not Prime Number";
    return 0;
}