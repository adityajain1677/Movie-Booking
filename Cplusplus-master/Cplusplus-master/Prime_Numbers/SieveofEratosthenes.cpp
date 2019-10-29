#include<iostream>
#include<vector>
using namespace std;

int main()
{
    int n;
    cout<<"Enter the number till which prime numbers are to be found :"<<endl;
    cin>>n;
    vector<int> a(n+1,0);
    for(int i=2;i<=n;i++)
    {
        if(a[i]==0)
        {
            for(int j=i+i;j<=n;j=j+i)
            {
                a[j]=1;
            }
        }
    }

    cout<<"The prime numbers till given number " <<n<<" are :"<<endl;
    for(int i=2;i<=n;i++)
    {
            if(a[i]==0)
            {
                cout<<i<<" ";
            }
    }
    cout<<endl;

    return 0;
} 