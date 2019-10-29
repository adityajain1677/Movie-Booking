#include<iostream>
using namespace std;
void prime_fun(int, int);
void check_prime(int, int);

using namespace std;
int main()
{
    int range;
    cout<<"enter the maximum range of prime number"; // 1<prime<range
    cin>>range;
    cout<<"Prime numbers between 1 to "<<range;
    prime_fun(range,2);
    return 0;
}

void prime_fun(int range,int number)
{
    if(number==range)
        return;

    check_prime(number,2);
    prime_fun(range,++number);
}

void check_prime(int number,int value)
{
    if(value<=(number/2))
    {
        if((number%value)==0)
            return;
        check_prime(number,++value);
    }
    else
    {
        cout<<endl<<number;
        return ;
    }
}