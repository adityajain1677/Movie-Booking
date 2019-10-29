#include<iostream>

using namespace std;

int main()
{
	int rows;
	int columns;
	
	int matrix1[100][100];
	int matrix2[100][100];
	int matrixSum[100][100];

	int i, j;

	cout << "Welcome To Addition Between Two Matrices" << endl << endl;

	cout << "Enter number of rows:    ";
	cin >> rows;

	cout << "Enter number of columns: ";
	cin >> columns;

	cout << endl;

	cout << "Matrix 1 Elements: " << endl;

	for (i = 0; i < rows; i++)
	{
		for (j = 0; j < columns; j++)
		{
			cout << "Element " << "[" << i + 1 << "," << j + 1 << "]" << ":           ";
			cin >> matrix1[i][j];
		}
	}

	cout << endl;

	cout << "Matrix 2 Elements: " << endl;

	for (i = 0; i < rows; i++)
	{
		for (j = 0; j < columns; j++)
		{
			cout << "Element " << "[" << i + 1 << "," << j + 1 << "]" << ":           ";
			cin >> matrix2[i][j];
		}
	}
	
	cout << endl;

	cout << "Matrix Sum Elements: " << endl;

	for (i = 0; i < rows; i++)
	{
		for (j = 0; j < columns; j++)
		{
			matrixSum[i][j] = matrix1[i][j] + matrix2[i][j];
			cout << matrixSum[i][j] << " ";

		}

		cout << endl;
	}

	return 0;
}