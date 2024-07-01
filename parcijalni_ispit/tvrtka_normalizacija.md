## Company



## 1N

### Employees

| Id | Name | Address | City | Email | Job Title | Salary | Department ID |
| -- | ---- | ------- | ---- | ----- | --------- | ------ | ------------- |

### Department

| Id | Name | Employee Id | Manager Id |
| -- | ---- | ----------- | ---------- |


## 2N

### Employees

| Id | Name | Address | City Id | Email | Job Title Id |
| -- | ---- | ------- | ------- | ----- | ------------ |

### Department

| Id | Name | Employee Id | Manager Id |
| -- | ---- | ----------- | ---------- |

### City

| Id | Name | Zip | 
| -- | ---- | --- |

### Job Title

| Id | Name | Salary | 
| -- | ---- | ------ |



## 3N

### Employees

| Id | Name | Address | City Id | Email |
| -- | ---- | ------- | ------- | ----- |

### Department

| Id | Name | Coefficient |
| -- | ---- | ----------- |

### Schedule
| Id | Employee Id | Department Id | Job Title Id |
| -- | ----------- | ------------- | ------------ |

### Salary

| Id | Employee Id | Amount |
| -- | ----------- | ------ |

### City

| Id | Name | Zip | 
| -- | ---- | --- |

### Job Title

| Id | Name | Coefficient |
| -- | ---- | ----------- |


