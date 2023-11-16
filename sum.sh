if [ $# -eq 0 ];then
	echo No arguments given.
else
	sum=0
	while [ $# -gt 0 ]
	do
		sum=$((sum+$1))
		shift
	done
	echo Sum of all the passed numbers is: $sum
fi
