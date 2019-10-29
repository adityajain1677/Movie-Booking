//To multiply two matrices
//Integer Pointers have been used for implementation
#include<iostream>
using namespace std;

int main()
{
    int rA,c,cB,i,j,k;int *A,*B,*C;
    char ans;
        do{
            cout<<"Enter the value of rows of A matrix, columns of A matrix and columns of B matrix : \n";
            cin>>rA>>c>>cB;
            A = new int(rA*c);
            B = new int(c*cB);
            C = new int(rA*cB);
            cout<<"\nEnter elements of matrix A : \n";
            for(i=0;i<rA;i++){
                for(j=0;j<c;j++){
                    cin>>*(A + i*c + j);
                }
            }
            cout<<"\nEnter elements of matrix B : \n";
            for(i=0;i<c;i++){
                for(j=0;j<cB;j++){
                    cin>>*(B + i*cB + j);
                }
            }

            for(i=0;i<rA;i++){
                for(j=0;j<cB;j++){
                       *(C + i*cB + j) = 0;
                    for(k=0;k<c;k++){
                       *(C + i*cB + j) += ((*(A + i*c + k)) * (*(B + k*c + j)));
                    }
                }
            }
            cout<<"\nProduct of the matrices : \n";
            for(i=0;i<rA;i++){
                for(j=0;j<cB;j++){

                    cout<<*(C + i*cB + j) <<' ';

                }
                cout<<'\n';
            }

            cout <<"\nAgain? (Y/N) ";
            cin>>ans;
        }while(ans=='y'||ans=='Y');
    return 0;
}
