#****************************************#
#*                                      *#
#* CodinGame.com Solutions by NAchref *#
#*                                      *#
#* Puzzle: Temperatures                 *#
#* Difficulty: Easy                     *#
#* Date solved: 19.03.2022              *#
#*                                      *#
#****************************************#

import sys

#Read inputs.
N = int(input())
inputs = input().split()

#If there are no temperatures provided, output 0.
if N <= 0:
    print(0)
    quit()

closestToZero = sys.maxsize

for i in range(N):
    T = int(inputs[i])
    
    #Find the closest to zero.
    if abs(T) < abs(closestToZero):
        closestToZero = T
    #Find the positive number that is closest to zero instead of the negative number (see 5 and -5).
    elif abs(T) == abs(closestToZero):
        closestToZero = max(closestToZero, T)

#Print output.
print(closestToZero)
