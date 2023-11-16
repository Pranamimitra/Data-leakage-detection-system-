echo -n "Enter array elements: "
read -a arr
n=${#arr[@]}
echo Number of elements in the array is: $n
if [ $n -le 0 ];then
	echo Invalid 
else
	for((i=0;i<n-1;i++))
	do
		small=${arr[$i]}
		index=$i
		for((j=i+1;j<n;j++))
		do
			if [ ${arr[$j]} -lt $small ];then
				small=${arr[$j]}
				index=$j
			fi
		done
	temp=${arr[$i]}
	arr[$i]=${arr[$index]}
	arr[$index]=$temp
	
	done
	
	echo Sorted array:${arr[@]}
fi
	
