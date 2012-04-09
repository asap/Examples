def uniques(seq):
    checked = []
    for e in seq:
        if e not in checked:
            checked.append(e)
    return checked

file =  [
[ '1','1','1','2','2','3','3','4','4' ],
[ '2','3','4','5','5' ],
[ '12','23','23','45','35' ],
[ '2','2','24','25','25' ]]

for element in file:
    # print set(element[:])
    print uniques(element)
