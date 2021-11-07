import { StatusBar } from 'expo-status-bar';
import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import DrawerNav from './navs/DrawerNav';
import RoutesScreen from './screens/Routes';
import Filters from './screens/Routes';

import Home from './screens/Home';
import Routes from './screens/Routes';
import TripPlanner from './screens/Trip Planner';
import BusPasses from './screens/Bus Passes';
import Account from './screens/Account';
import Settings from './screens/Settings';
import StartUp from './screens/Start Up Page';

const Drawer = createDrawerNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name="Home" component={DrawerNav} />
        <Stack.Screen name="Filters" component={Filters} />
        </Stack.Navigator>
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
