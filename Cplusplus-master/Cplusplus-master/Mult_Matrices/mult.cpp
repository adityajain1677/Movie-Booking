#include <iostream>

using namespace std;

int main(){
  int matrice_1 [10][10];
  int matrice_2 [10][10];
  int rows_1, rows_2, cols_1, cols_2;

  int matrice_output [10][10];

  int temp_mult = 0;
  cout << "Enter rows and columns for first matrix: ";
  cin >> rows_1 >> cols_1;
  cout << "Enter rows and columns for second matrix: ";
  cin >> rows_2 >> cols_2;

  cout << endl << "Enter elements of matrix 1:" << endl;
  for(int i = 0; i < rows_1; ++i){
    for(int j = 0; j < cols_1; ++j){
      cout << "Enter element a" << i + 1 << j + 1 << " : ";
      cin >> matrice_1[i][j];
      }
  }

    // Storing elements of second matrix.
  cout << endl << "Enter elements of matrix 2:" << endl;
  for(int i = 0; i < rows_2; ++i){
    for(int j = 0; j < cols_2; ++j){
      cout << "Enter element b" << i + 1 << j + 1 << " : ";
      cin >> matrice_2[i][j];
      }
  }

  if (rows_2 != cols_1 || rows_1 != cols_2){
    cout << "Can't multiply matrices" << endl;
    return 0;
  }
  int j = 0;
  for (int i = 0; i < cols_2; i++){
    for (j = 0; j < cols_2; j++){
      matrice_output[i][j] = 0;
      for (int k = 0; k < cols_1; k++){
        matrice_output[i][j] += matrice_1[i][k] * matrice_2[k][j];
      }
    }
  }

  cout << "\nResults: \n" << endl;
  for(int i = 0; i < cols_2; i++){
    cout << "[ ";
    for(int j = 0; j < cols_2; j++){
      cout << matrice_output[i][j] << "  ";
    }
    cout << "]" << endl;
  }
}