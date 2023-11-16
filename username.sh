read -p "Enter a username: " username
user=$(grep -c $username /etc/passwd)
if [ $user -eq 1 ];then
	echo "The username $username is Valid"
else
	echo "The username $username is Invalid"
fi
