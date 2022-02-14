class TimBola():

	def __init__(self, nama, negara, tahun, pemain):
		self.__nama = nama
		self.__negara = negara
		self.__tahun = tahun
		self.__pemain = pemain

	def setNama(self, nama):
		self.__nama = nama

	def getNama(self):
		return self.__nama

	def setNegara(self, negara):
		self.__negara = negara

	def getNegara(self):
		return self.__negara

	def setTahun(self, tahun):
		self.__tahun = tahun

	def getTahun(self):
		return self.__tahun

	def setPemain(self, pemain):
		self.__pemain = pemain

	def getPemain(self):
		return self.__pemain	
