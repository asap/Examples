def toBinary( integer ):
    quotient = 1
    remainder = 0
    finalNumberList = []
    n = ""

    while quotient != 0:
        remainder = int(integer) % 2
        quotient = int(integer)  / 2
        integer = quotient
        finalNumberList.insert( 0, remainder )

    for num in finalNumberList:
        n += str(num)
    return n

def get_number_of_ones( integer ):
    return toBinary(integer).count( "1" )

file = [
    '10',
    '22',
    '56',
    '123',
    '256',
    '156489818' ]

for number in file:
    print get_number_of_ones(number),