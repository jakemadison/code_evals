
class MyClass():

    class_var = 20

    def __init__(self, n):
        self.data = n

    def __repr__(self):
        return "self: " + str(self.data) + " class: " + str(self.class_var)
    __str__ = __repr__

    def add_one(self):
        self.class_var += 1


x = MyClass('x')
y = MyClass('y')

print x
print y

MyClass.class_var = 30
x.add_one()
MyClass.class_var = 30

print MyClass.class_var
print x.class_var
y.class_var = x.class_var

print x
print y

MyClass.class_var = 10

print x
print y
z = MyClass('z')
x.class_var = 2

print x
print y
print z
